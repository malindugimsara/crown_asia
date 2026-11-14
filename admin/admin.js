/**
 * Crown Asia LLC Management Portal - Core Interaction Engine (admin.js)
 * Features:
 * - Floating Animated Toast Notifications
 * - Animated Delete Confirmation Modal & Row Exit Animation
 * - Animated Log Out Confirmation Modal
 * - Mobile Off-canvas Navigation Drawer & Backdrop
 * - URL Query Message Auto-Detection & Sanitization
 */

(function () {
    'use strict';

    // -------------------------------------------------------------------------
    // 1. Toast Notification System
    // -------------------------------------------------------------------------
    function getToastContainer() {
        let container = document.getElementById('adminToastContainer');
        if (!container) {
            container = document.createElement('div');
            container.id = 'adminToastContainer';
            container.className = 'admin-toast-container';
            document.body.appendChild(container);
        }
        return container;
    }

    let lastToastSignature = '';
    let lastToastTimestamp = 0;

    window.showAdminToast = function (type, title, message, duration = 4000) {
        const signature = `${type}|${title}|${message}`;
        const now = Date.now();
        if (signature === lastToastSignature && (now - lastToastTimestamp < 1500)) {
            return;
        }
        lastToastSignature = signature;
        lastToastTimestamp = now;

        const container = getToastContainer();
        const toast = document.createElement('div');
        toast.className = `admin-toast toast-${type}`;

        let iconClass = 'bi bi-check-circle-fill';
        if (type === 'error') iconClass = 'bi bi-exclamation-triangle-fill';
        else if (type === 'warning') iconClass = 'bi bi-exclamation-circle-fill';
        else if (type === 'info') iconClass = 'bi bi-info-circle-fill';

        toast.innerHTML = `
            <div class="toast-icon-wrap">
                <i class="${iconClass}"></i>
            </div>
            <div class="toast-content">
                <h5 class="toast-title">${title}</h5>
                <p class="toast-message">${message}</p>
            </div>
            <button type="button" class="toast-close-btn" aria-label="Close notification">&times;</button>
            <div class="toast-progress-bar" style="animation-duration: ${duration}ms;"></div>
        `;

        container.appendChild(toast);

        let dismissTimeout = null;

        function dismissToast() {
            if (toast.classList.contains('hiding')) return;
            toast.classList.add('hiding');
            setTimeout(() => {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 320);
        }

        const closeBtn = toast.querySelector('.toast-close-btn');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                if (dismissTimeout) clearTimeout(dismissTimeout);
                dismissToast();
            });
        }

        toast.addEventListener('mouseenter', () => {
            if (dismissTimeout) clearTimeout(dismissTimeout);
            const pBar = toast.querySelector('.toast-progress-bar');
            if (pBar) pBar.style.animationPlayState = 'paused';
        });

        toast.addEventListener('mouseleave', () => {
            const pBar = toast.querySelector('.toast-progress-bar');
            if (pBar) pBar.style.animationPlayState = 'running';
            dismissTimeout = setTimeout(dismissToast, 2000);
        });

        dismissTimeout = setTimeout(dismissToast, duration);
    };

    // Auto-detect message alerts and URL parameters without double-triggering
    function handleFlashMessages() {
        const urlParams = new URLSearchParams(window.location.search);
        const msgParam = urlParams.get('msg');
        let triggered = false;

        if (msgParam) {
            const msgLower = msgParam.toLowerCase();
            if (msgLower === 'deleted') {
                window.showAdminToast('success', 'Deleted Successfully', 'The selected item was removed.');
                triggered = true;
            } else if (msgLower === 'updated') {
                window.showAdminToast('success', 'Changes Saved', 'Information updated successfully.');
                triggered = true;
            } else if (msgLower === 'added') {
                window.showAdminToast('success', 'Created Successfully', 'New record added to the database.');
                triggered = true;
            } else if (msgLower === 'published') {
                window.showAdminToast('success', 'Published', 'Item is now publicly visible on Crown Asia.');
                triggered = true;
            } else if (msgLower === 'unpublished') {
                window.showAdminToast('info', 'Hidden', 'Item is hidden from the public website.');
                triggered = true;
            } else if (msgLower === 'trashed') {
                window.showAdminToast('warning', 'Moved to Trash', 'Item moved to Trash tab. You can restore it anytime.');
                triggered = true;
            } else if (msgLower === 'restored') {
                window.showAdminToast('success', 'Restored Successfully', 'Item restored to active list.');
                triggered = true;
            } else if (msgLower === 'deleted_permanent') {
                window.showAdminToast('error', 'Permanently Deleted', 'Record has been permanently removed.');
                triggered = true;
            }

            if (triggered) {
                urlParams.delete('msg');
                const cleanQuery = urlParams.toString();
                const cleanUrl = window.location.pathname + (cleanQuery ? '?' + cleanQuery : '');
                window.history.replaceState({}, document.title, cleanUrl);

                document.querySelectorAll('.alert').forEach(alertEl => {
                    alertEl.style.display = 'none';
                    alertEl.remove();
                });
                return;
            }
        }

        const serverAlerts = document.querySelectorAll('.alert:not([data-toasted="true"])');
        let alertTriggered = false;
        serverAlerts.forEach(alertEl => {
            alertEl.dataset.toasted = 'true';
            alertEl.style.display = 'none';
            const text = alertEl.textContent.trim();
            if (text && !alertTriggered) {
                const isError = alertEl.classList.contains('alert-danger');
                const isWarning = alertEl.classList.contains('alert-warning');
                const isInfo = alertEl.classList.contains('alert-info');

                let type = 'success';
                let title = 'Action Completed';
                if (isError) {
                    type = 'error';
                    title = 'Notice';
                } else if (isWarning) {
                    type = 'warning';
                    title = 'Warning';
                } else if (isInfo) {
                    type = 'info';
                    title = 'Information';
                }

                window.showAdminToast(type, title, text);
                alertTriggered = true;
            }
        });
    }

    // -------------------------------------------------------------------------
    // 2. Animated Delete Confirmation Modal & Row Exit Animation
    // -------------------------------------------------------------------------
    let modalOverlay = null;
    let pendingDeleteUrl = null;
    let pendingTargetRow = null;
    let isDeleting = false;

    function buildDeleteModal() {
        modalOverlay = document.getElementById('adminDeleteModalOverlay');
        if (modalOverlay) return modalOverlay;

        modalOverlay = document.createElement('div');
        modalOverlay.className = 'admin-modal-overlay';
        modalOverlay.id = 'adminDeleteModalOverlay';
        modalOverlay.innerHTML = `
            <div class="admin-modal-card">
                <div class="modal-warning-icon">
                    <i class="bi bi-trash3-fill"></i>
                </div>
                <h4 class="modal-title-text">Confirm Deletion</h4>
                <p class="modal-desc-text" id="adminDeleteModalDesc">
                    Are you sure you want to delete this record? This action cannot be undone.
                </p>
                <div class="modal-btn-row">
                    <button type="button" class="btn-modal-cancel" id="adminDeleteCancelBtn">Cancel</button>
                    <button type="button" class="btn-modal-delete" id="adminDeleteConfirmBtn">
                        <i class="bi bi-trash3-fill me-1"></i> Yes, Delete
                    </button>
                </div>
            </div>
        `;
        document.body.appendChild(modalOverlay);

        const cancelBtn = modalOverlay.querySelector('#adminDeleteCancelBtn');
        const confirmBtn = modalOverlay.querySelector('#adminDeleteConfirmBtn');

        function closeModal() {
            if (isDeleting) return;
            modalOverlay.classList.remove('active');
            pendingDeleteUrl = null;
            pendingTargetRow = null;
        }

        cancelBtn.addEventListener('click', closeModal);
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
                closeModal();
            }
        });

        confirmBtn.addEventListener('click', () => {
            if (!pendingDeleteUrl || isDeleting) {
                closeModal();
                return;
            }

            isDeleting = true;
            confirmBtn.disabled = true;
            confirmBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> Deleting...';

            const targetUrl = pendingDeleteUrl;
            const targetRow = pendingTargetRow;

            if (targetRow && targetRow.tagName === 'TR') {
                targetRow.classList.add('row-deleting');
            }

            setTimeout(() => {
                window.location.href = targetUrl;
            }, 300);
        });

        return modalOverlay;
    }

    function openDeleteModal(url, itemName, rowElement) {
        buildDeleteModal();
        isDeleting = false;
        pendingDeleteUrl = url;
        pendingTargetRow = rowElement;

        const isForce = url.includes('force_delete=');
        const confirmBtn = modalOverlay.querySelector('#adminDeleteConfirmBtn');
        const descEl = document.getElementById('adminDeleteModalDesc');
        const titleEl = modalOverlay.querySelector('.modal-title-text');

        if (confirmBtn) {
            confirmBtn.disabled = false;
            confirmBtn.innerHTML = isForce
                ? '<i class="bi bi-exclamation-triangle-fill me-1"></i> Permanently Delete'
                : '<i class="bi bi-trash3-fill me-1"></i> Yes, Delete';
        }

        if (titleEl) {
            titleEl.textContent = isForce ? 'Permanently Delete Record' : 'Confirm Record Deletion';
        }

        if (descEl) {
            if (isForce) {
                descEl.innerHTML = `Are you sure you want to permanently delete ${itemName ? `<strong>${itemName}</strong>` : 'this record'}?<br><span class="text-danger fw-semibold"><i class="bi bi-exclamation-triangle-fill me-1"></i> This action is permanent and cannot be recovered.</span>`;
            } else {
                descEl.innerHTML = `Are you sure you want to delete ${itemName ? `<strong>${itemName}</strong>` : 'this record'}?<br><span class="text-muted"><i class="bi bi-info-circle-fill me-1 text-warning"></i> This record will be removed from the Crown Asia database.</span>`;
            }
        }

        modalOverlay.classList.add('active');
    }

    function initDeleteInterceptors() {
        document.addEventListener('click', function (e) {
            const deleteBtn = e.target.closest('.btn-action-delete, .btn-action-force-delete, .btn-delete-confirm, a[href*="delete="], a[href*="force_delete="]');
            if (!deleteBtn) return;

            const hrefAttr = deleteBtn.getAttribute('href') || '';
            if (hrefAttr.includes('logout.php')) return;

            const url = deleteBtn.href || hrefAttr || deleteBtn.dataset.deleteUrl;
            if (!url) return;

            e.preventDefault();
            e.stopPropagation();

            const row = deleteBtn.closest('tr');
            let itemName = deleteBtn.dataset.itemName || '';

            if (!itemName && row) {
                const strongText = row.querySelector('strong');
                if (strongText) {
                    itemName = strongText.textContent.trim();
                }
            }

            openDeleteModal(url, itemName, row);
        }, true);
    }

    // -------------------------------------------------------------------------
    // 3. Animated Log Out Confirmation Modal
    // -------------------------------------------------------------------------
    let logoutOverlay = null;
    let pendingLogoutUrl = null;
    let isLoggingOut = false;

    function buildLogoutModal() {
        logoutOverlay = document.getElementById('adminLogoutModalOverlay');
        if (logoutOverlay) return logoutOverlay;

        logoutOverlay = document.createElement('div');
        logoutOverlay.className = 'admin-modal-overlay';
        logoutOverlay.id = 'adminLogoutModalOverlay';
        logoutOverlay.innerHTML = `
            <div class="admin-modal-card">
                <div class="modal-logout-icon">
                    <i class="bi bi-box-arrow-right"></i>
                </div>
                <h4 class="modal-title-text">Confirm Sign Out</h4>
                <p class="modal-desc-text">
                    Are you sure you want to log out from the <strong>Crown Asia Admin Portal</strong>?<br>
                    Your current session will end safely.
                </p>
                <div class="modal-btn-row">
                    <button type="button" class="btn-modal-cancel" id="adminLogoutCancelBtn">Stay Logged In</button>
                    <button type="button" class="btn-modal-logout" id="adminLogoutConfirmBtn">
                        <i class="bi bi-box-arrow-right me-1"></i> Yes, Log Out
                    </button>
                </div>
            </div>
        `;
        document.body.appendChild(logoutOverlay);

        const cancelBtn = logoutOverlay.querySelector('#adminLogoutCancelBtn');
        const confirmBtn = logoutOverlay.querySelector('#adminLogoutConfirmBtn');

        function closeLogoutModal() {
            if (isLoggingOut) return;
            logoutOverlay.classList.remove('active');
            pendingLogoutUrl = null;
        }

        cancelBtn.addEventListener('click', closeLogoutModal);
        logoutOverlay.addEventListener('click', (e) => {
            if (e.target === logoutOverlay) closeLogoutModal();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && logoutOverlay.classList.contains('active')) {
                closeLogoutModal();
            }
        });

        confirmBtn.addEventListener('click', () => {
            if (!pendingLogoutUrl || isLoggingOut) {
                closeLogoutModal();
                return;
            }

            isLoggingOut = true;
            confirmBtn.disabled = true;
            confirmBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> Logging Out...';

            const targetUrl = pendingLogoutUrl;
            setTimeout(() => {
                window.location.href = targetUrl;
            }, 250);
        });

        return logoutOverlay;
    }

    function openLogoutModal(url) {
        buildLogoutModal();
        isLoggingOut = false;
        pendingLogoutUrl = url || 'logout.php';

        const confirmBtn = logoutOverlay.querySelector('#adminLogoutConfirmBtn');
        if (confirmBtn) {
            confirmBtn.disabled = false;
            confirmBtn.innerHTML = '<i class="bi bi-box-arrow-right me-1"></i> Yes, Log Out';
        }

        logoutOverlay.classList.add('active');
    }

    function initLogoutInterceptors() {
        // Allow native direct navigation to logout.php for instantaneous, reliable sign-out
    }

    // -------------------------------------------------------------------------
    // 4. Mobile Off-Canvas Sidebar Drawer & Backdrop
    // -------------------------------------------------------------------------
    function initMobileNavigation() {
        let backdrop = document.getElementById('sidebarBackdrop');
        if (!backdrop) {
            backdrop = document.createElement('div');
            backdrop.id = 'sidebarBackdrop';
            backdrop.className = 'sidebar-backdrop';
            document.body.appendChild(backdrop);
        }

        const sidebar = document.querySelector('.sidebar');
        const toggleBtn = document.getElementById('mobileSidebarToggle');
        const closeBtn = document.getElementById('sidebarCloseBtn');

        function openSidebar() {
            if (sidebar) sidebar.classList.add('show');
            if (backdrop) backdrop.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            if (sidebar) sidebar.classList.remove('show');
            if (backdrop) backdrop.classList.remove('active');
            document.body.style.overflow = '';
        }

        if (toggleBtn) {
            toggleBtn.addEventListener('click', function (e) {
                e.preventDefault();
                openSidebar();
            });
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', function (e) {
                e.preventDefault();
                closeSidebar();
            });
        }

        backdrop.addEventListener('click', closeSidebar);

        window.addEventListener('resize', function () {
            if (window.innerWidth >= 992) {
                closeSidebar();
            }
        });
    }

    // -------------------------------------------------------------------------
    // 5. Admin Icon Picker & Interactive Gallery Explorer (Hetxa ERP/POS Icons)
    // -------------------------------------------------------------------------
    const ADMIN_ICON_CATALOG = [
        {
            category: 'ERP, POS & Retail Modules',
            icons: [
                { class: 'fa-solid fa-cash-register', name: 'Cloud POS & Billing', tags: 'pos billing register checkout retail sales' },
                { class: 'fa-solid fa-boxes-stacked', name: 'Inventory & Stock Control', tags: 'inventory stock warehouse items batches' },
                { class: 'fa-solid fa-warehouse', name: 'Multi-Branch & Warehouse', tags: 'warehouse branch store depot location' },
                { class: 'fa-solid fa-barcode', name: 'Barcode & SKU Scanning', tags: 'barcode scan sku product label' },
                { class: 'fa-solid fa-cart-shopping', name: 'Purchase Orders & Procurement', tags: 'purchase order cart procurement suppliers' },
                { class: 'fa-solid fa-receipt', name: 'Invoicing & Receipts', tags: 'receipt invoice bill transaction print' }
            ]
        },
        {
            category: 'Finance, Accounting & Cheques',
            icons: [
                { class: 'fa-solid fa-file-invoice-dollar', name: 'Financial Accounting & Ledger', tags: 'invoice billing accounting ledger finance' },
                { class: 'fa-solid fa-money-check-dollar', name: 'Cheque Management & Banking', tags: 'cheque bank payment PDC clearance' },
                { class: 'fa-solid fa-coins', name: 'Costing & Profit Margins', tags: 'coins cost margin savings pricing money' },
                { class: 'fa-solid fa-sack-dollar', name: 'Revenue & Cash Flow', tags: 'profit revenue income earnings dollar cash' },
                { class: 'fa-solid fa-calculator', name: 'Tax, VAT & Payroll Calc', tags: 'calculator tax vat payroll accounting' },
                { class: 'fa-solid fa-chart-pie', name: 'Budgeting & Expense Split', tags: 'chart pie budget allocation expenditure' }
            ]
        },
        {
            category: 'Cloud, AI & Enterprise Tech',
            icons: [
                { class: 'fa-solid fa-cloud-arrow-up', name: 'Cloud Sync & Backup', tags: 'cloud upload sync digital infrastructure' },
                { class: 'fa-solid fa-brain', name: 'AI Business Insights', tags: 'brain ai artificial intelligence analytics forecasting' },
                { class: 'fa-solid fa-laptop-code', name: 'Enterprise Web Platform', tags: 'laptop digital code software systems erp it' },
                { class: 'fa-solid fa-shield-halved', name: 'Enterprise Data Security', tags: 'shield security compliance protection encryption' },
                { class: 'fa-solid fa-server', name: 'Dedicated Cloud Hosting', tags: 'server hosting database uptime performance' },
                { class: 'fa-solid fa-mobile-screen-button', name: 'Mobile POS & Companion App', tags: 'mobile phone app android ios portable' }
            ]
        },
        {
            category: 'CRM, HR & Business Growth',
            icons: [
                { class: 'fa-solid fa-users-gear', name: 'HR & Payroll Management', tags: 'hr payroll staff workforce attendance' },
                { class: 'fa-solid fa-handshake', name: 'CRM & Customer Loyalty', tags: 'crm customer loyalty partnership deals' },
                { class: 'fa-solid fa-chart-line', name: 'Sales Analytics & Reports', tags: 'chart growth line performance sales analytics' },
                { class: 'fa-solid fa-diagram-project', name: 'Automated Workflows', tags: 'workflow process automation flow diagram' },
                { class: 'fa-solid fa-globe', name: 'Multi-Currency & Global Ops', tags: 'globe world international trade export' },
                { class: 'fa-solid fa-rocket', name: 'Business Scaling & Speed', tags: 'rocket scaleup launch acceleration speed' }
            ]
        }
    ];

    function findIconMeta(iconClass) {
        const clean = (iconClass || '').trim();
        for (const cat of ADMIN_ICON_CATALOG) {
            for (const item of cat.icons) {
                if (item.class === clean) {
                    return item;
                }
            }
        }
        return null;
    }

    function updateIconPickerUI(inputId, iconClass, triggerPop = true) {
        const clean = (iconClass || '').trim();
        const rawInput = document.getElementById(inputId);
        const select = document.getElementById('select_' + inputId);
        const previewIcon = document.getElementById('preview_icon_' + inputId);
        const previewName = document.getElementById('preview_name_' + inputId);
        const previewClass = document.getElementById('preview_class_' + inputId);

        if (rawInput && rawInput.value !== clean) {
            rawInput.value = clean;
        }

        const meta = findIconMeta(clean);
        const displayName = meta ? meta.name : (clean ? 'Custom Icon Class' : 'No Icon Selected');

        if (previewIcon) {
            previewIcon.className = clean || 'fa-solid fa-icons';
            if (triggerPop) {
                const badgeFrame = previewIcon.closest('.admin-icon-badge-frame');
                if (badgeFrame) {
                    badgeFrame.classList.remove('admin-icon-pop');
                    void badgeFrame.offsetWidth;
                    badgeFrame.classList.add('admin-icon-pop');
                }
            }
        }

        if (previewName) previewName.textContent = displayName;
        if (previewClass) previewClass.textContent = clean || 'none';

        if (select) {
            if (meta) select.value = clean;
            else if (clean) select.value = '__custom__';
            else select.value = '';
        }
    }

    window.updateIconPickerUI = updateIconPickerUI;

    window.handleAdminIconDropdownChange = function (inputId, selectedValue) {
        if (selectedValue === '__custom__') {
            const rawInput = document.getElementById(inputId);
            if (rawInput) {
                rawInput.focus();
                rawInput.select();
            }
            return;
        }
        updateIconPickerUI(inputId, selectedValue, true);
    };

    window.handleAdminIconInputChange = function (inputId, value) {
        updateIconPickerUI(inputId, value, false);
    };

    window.handleAdminIconPreviewRefresh = function (inputId) {
        const rawInput = document.getElementById(inputId);
        const val = rawInput ? rawInput.value : '';
        updateIconPickerUI(inputId, val, true);
        if (window.showAdminToast) {
            window.showAdminToast('info', 'Preview Refreshed', `Rendering '${val}'`);
        }
    };

    // -------------------------------------------------------------------------
    // Icon Gallery Modal Implementation
    // -------------------------------------------------------------------------
    let currentGalleryTargetId = null;
    let galleryModalEl = null;

    function buildGalleryModal() {
        if (galleryModalEl) return galleryModalEl;

        galleryModalEl = document.createElement('div');
        galleryModalEl.id = 'adminIconGalleryModal';
        galleryModalEl.className = 'admin-icon-modal-overlay';
        galleryModalEl.setAttribute('role', 'dialog');
        galleryModalEl.setAttribute('aria-modal', 'true');

        let totalIcons = 0;
        ADMIN_ICON_CATALOG.forEach(c => totalIcons += c.icons.length);

        galleryModalEl.innerHTML = `
            <div class="admin-icon-modal-container">
                <div class="admin-icon-modal-header">
                    <h4 class="admin-icon-modal-title">
                        <i class="fa-solid fa-shapes text-primary"></i>
                        Crown Asia Icon Library & Visual Explorer
                        <span class="badge bg-dark text-white ms-2" style="font-size: 11px;">${totalIcons} Curated</span>
                    </h4>
                    <button type="button" class="admin-icon-modal-close-btn" aria-label="Close dialog">&times;</button>
                </div>
                
                <div class="admin-icon-modal-toolbar">
                    <div class="admin-icon-search-input-wrap">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="adminIconSearchInput" class="admin-icon-search-input" 
                               placeholder="Search icons by keyword (e.g. pos, inventory, cheque, cloud, ai, payroll)...">
                    </div>
                    <div class="admin-icon-category-pills" id="adminIconCategoryPills">
                        <button type="button" class="admin-icon-category-pill active" data-cat="all">All Icons (${totalIcons})</button>
                        ${ADMIN_ICON_CATALOG.map(c => `
                            <button type="button" class="admin-icon-category-pill" data-cat="${c.category}">
                                ${c.category.split('&')[0].trim()} (${c.icons.length})
                            </button>
                        `).join('')}
                    </div>
                </div>

                <div class="admin-icon-grid-container">
                    <div class="admin-icon-grid" id="adminIconGrid"></div>
                </div>

                <div class="admin-icon-modal-footer">
                    <div class="admin-icon-modal-footer-tip">
                        <i class="fa-solid fa-lightbulb text-warning"></i>
                        <span>Need more icons? Browse 2,000+ free icons on FontAwesome</span>
                        <a href="https://fontawesome.com/search?o=r&m=free" target="_blank" rel="noopener noreferrer" 
                           class="btn btn-sm btn-outline-dark ms-2 py-1 px-2" style="font-size: 11px;">
                            <i class="fa-brands fa-font-awesome me-1"></i> FontAwesome Directory <i class="fa-solid fa-arrow-up-right-from-square ms-1" style="font-size: 9px;"></i>
                        </a>
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm px-3 admin-icon-modal-cancel">Close</button>
                </div>
            </div>
        `;

        document.body.appendChild(galleryModalEl);

        const closeBtn = galleryModalEl.querySelector('.admin-icon-modal-close-btn');
        const cancelBtn = galleryModalEl.querySelector('.admin-icon-modal-cancel');
        const searchInput = galleryModalEl.querySelector('#adminIconSearchInput');
        const pillsContainer = galleryModalEl.querySelector('#adminIconCategoryPills');

        function closeModal() {
            galleryModalEl.classList.remove('active');
            document.body.style.overflow = '';
        }

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (cancelBtn) cancelBtn.addEventListener('click', closeModal);

        galleryModalEl.addEventListener('click', function (e) {
            if (e.target === galleryModalEl) closeModal();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && galleryModalEl.classList.contains('active')) closeModal();
        });

        let activeCategory = 'all';
        let searchQuery = '';

        function renderCards() {
            const grid = galleryModalEl.querySelector('#adminIconGrid');
            if (!grid) return;

            const targetInput = currentGalleryTargetId ? document.getElementById(currentGalleryTargetId) : null;
            const currentSelectedClass = targetInput ? targetInput.value.trim() : '';

            let matchedIcons = [];
            ADMIN_ICON_CATALOG.forEach(cat => {
                if (activeCategory === 'all' || activeCategory === cat.category) {
                    cat.icons.forEach(ico => {
                        const term = searchQuery.toLowerCase().trim();
                        if (!term ||
                            ico.name.toLowerCase().includes(term) ||
                            ico.class.toLowerCase().includes(term) ||
                            ico.tags.toLowerCase().includes(term) ||
                            cat.category.toLowerCase().includes(term)) {
                            matchedIcons.push({ ...ico, catName: cat.category });
                        }
                    });
                }
            });

            if (matchedIcons.length === 0) {
                grid.innerHTML = `
                    <div class="col-12 text-center py-5" style="grid-column: 1 / -1;">
                        <i class="fa-solid fa-face-frown text-muted mb-2" style="font-size: 36px;"></i>
                        <h6 class="text-muted fw-bold">No icons found matching "${searchQuery}"</h6>
                        <p class="text-muted small mb-3">Try searching for terms like "pos", "inventory", "cloud", or browse FontAwesome.</p>
                        <a href="https://fontawesome.com/search?o=r&m=free&q=${encodeURIComponent(searchQuery)}" target="_blank" class="btn btn-outline-dark btn-sm">
                            <i class="fa-brands fa-font-awesome me-1"></i> Search "${searchQuery}" on FontAwesome.com
                        </a>
                    </div>
                `;
                return;
            }

            grid.innerHTML = matchedIcons.map(ico => {
                const isSelected = (ico.class === currentSelectedClass);
                return `
                    <div class="admin-icon-grid-card ${isSelected ? 'is-selected' : ''}" 
                         data-class="${ico.class}" data-name="${ico.name}" title="${ico.name} (${ico.class})">
                        <div class="admin-icon-grid-card-symbol">
                            <i class="${ico.class}"></i>
                        </div>
                        <div class="admin-icon-grid-card-name">${ico.name}</div>
                        <div class="admin-icon-grid-card-code">${ico.class}</div>
                    </div>
                `;
            }).join('');

            grid.querySelectorAll('.admin-icon-grid-card').forEach(card => {
                card.addEventListener('click', function () {
                    const chosenClass = this.getAttribute('data-class');
                    const chosenName = this.getAttribute('data-name');
                    if (currentGalleryTargetId) {
                        updateIconPickerUI(currentGalleryTargetId, chosenClass, true);
                        if (window.showAdminToast) {
                            window.showAdminToast('success', 'Icon Selected', `${chosenName} (${chosenClass})`);
                        }
                    }
                    closeModal();
                });
            });
        }

        if (searchInput) {
            searchInput.addEventListener('input', function () {
                searchQuery = this.value;
                renderCards();
            });
        }

        if (pillsContainer) {
            pillsContainer.addEventListener('click', function (e) {
                const pill = e.target.closest('.admin-icon-category-pill');
                if (!pill) return;
                pillsContainer.querySelectorAll('.admin-icon-category-pill').forEach(p => p.classList.remove('active'));
                pill.classList.add('active');
                activeCategory = pill.getAttribute('data-cat');
                renderCards();
            });
        }

        galleryModalEl.renderCards = renderCards;
        return galleryModalEl;
    }

    window.openAdminIconGallery = function (targetInputId) {
        currentGalleryTargetId = targetInputId;
        const modal = buildGalleryModal();
        const searchInput = modal.querySelector('#adminIconSearchInput');
        if (searchInput) searchInput.value = '';

        const pillsContainer = modal.querySelector('#adminIconCategoryPills');
        if (pillsContainer) {
            pillsContainer.querySelectorAll('.admin-icon-category-pill').forEach((p, idx) => {
                p.classList.toggle('active', idx === 0);
            });
        }

        if (modal.renderCards) modal.renderCards();

        modal.classList.add('active');
        document.body.style.overflow = 'hidden';

        setTimeout(() => {
            if (searchInput) searchInput.focus();
        }, 150);
    };

    // -------------------------------------------------------------------------
    // 6. Universal AJAX Publish / Hide Status Toggle Interceptor
    // -------------------------------------------------------------------------
    function initStatusToggleInterceptors() {
        document.addEventListener('click', function (e) {
            const toggleBtn = e.target.closest('a[href*="toggle_publish="], .btn-action-hide, .btn-action-publish, a.badge-published, a.badge-hidden');
            if (!toggleBtn) return;

            const href = toggleBtn.getAttribute('href');
            if (!href || href === '#' || href.startsWith('javascript:')) return;

            e.preventDefault();
            e.stopPropagation();

            const iconEl = toggleBtn.querySelector('i');
            const originalIconClass = iconEl ? iconEl.className : '';
            const row = toggleBtn.closest('tr');

            if (iconEl) iconEl.className = 'spinner-border spinner-border-sm';
            toggleBtn.style.pointerEvents = 'none';

            const urlObj = new URL(href, window.location.href);
            urlObj.searchParams.set('ajax', '1');

            fetch(urlObj.toString(), {
                method: 'GET',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
                .then(res => {
                    if (!res.ok) throw new Error('HTTP ' + res.status);
                    return res.json();
                })
                .then(data => {
                    toggleBtn.style.pointerEvents = '';
                    if (data.status === 'success') {
                        const newStatus = parseInt(data.new_status, 10);

                        if (row) {
                            // 1. Update Badge Element
                            const badge = row.querySelector('.badge-published, .badge-hidden');
                            if (badge) {
                                const activeText = badge.getAttribute('data-active-text') || 'Published';
                                const inactiveText = badge.getAttribute('data-inactive-text') || 'Hidden';
                                const isLink = badge.tagName === 'A';
                                
                                if (newStatus === 1) {
                                    badge.className = 'badge-published' + (isLink ? ' text-decoration-none' : '');
                                    badge.innerHTML = `<i class="bi bi-eye-fill me-1"></i> ${activeText}`;
                                    badge.title = 'Click to Hide';
                                } else {
                                    badge.className = 'badge-hidden' + (isLink ? ' text-decoration-none' : '');
                                    badge.innerHTML = `<i class="bi bi-eye-slash-fill me-1"></i> ${inactiveText}`;
                                    badge.title = 'Click to Show';
                                }

                                badge.classList.remove('status-updated-flash');
                                void badge.offsetWidth;
                                badge.classList.add('status-updated-flash');

                                if (isLink && badge.href) {
                                    try {
                                        const bUrl = new URL(badge.href, window.location.href);
                                        bUrl.searchParams.set('toggle_publish', newStatus);
                                        bUrl.searchParams.delete('ajax');
                                        badge.setAttribute('href', bUrl.pathname + bUrl.search);
                                    } catch (err) {}
                                }
                            }

                            // 2. Update Action Icon Button
                            const actionBtn = row.querySelector('.btn-action-hide, .btn-action-publish, a.btn-action[href*="toggle_publish="]');
                            if (actionBtn) {
                                const aIcon = actionBtn.querySelector('i');
                                if (newStatus === 1) {
                                    actionBtn.className = 'btn-action btn-action-hide';
                                    actionBtn.title = 'Hide';
                                    if (aIcon) aIcon.className = 'bi bi-eye-slash';
                                } else {
                                    actionBtn.className = 'btn-action btn-action-publish';
                                    actionBtn.title = 'Show / Publish';
                                    if (aIcon) aIcon.className = 'bi bi-eye';
                                }
                                if (actionBtn.href) {
                                    try {
                                        const aUrl = new URL(actionBtn.href, window.location.href);
                                        aUrl.searchParams.set('toggle_publish', newStatus);
                                        aUrl.searchParams.delete('ajax');
                                        actionBtn.setAttribute('href', aUrl.pathname + aUrl.search);
                                    } catch (err) {}
                                }
                            }
                        } else {
                            if (iconEl) iconEl.className = originalIconClass;
                        }

                        if (window.showAdminToast) {
                            const titleText = (newStatus === 1) ? 'Status: Active / Published' : 'Status: Hidden';
                            const msgText = (newStatus === 1)
                                ? 'Item is now live and visible on Crown Asia.'
                                : 'Item has been hidden from public view.';
                            window.showAdminToast(newStatus === 1 ? 'success' : 'info', titleText, msgText);
                        }
                    } else {
                        if (iconEl) iconEl.className = originalIconClass;
                        if (window.showAdminToast) {
                            window.showAdminToast('error', 'Status Update Failed', data.message || 'Database error occurred.');
                        }
                    }
                })
                .catch(err => {
                    toggleBtn.style.pointerEvents = '';
                    if (iconEl) iconEl.className = originalIconClass;
                    console.error('AJAX Status Toggle failed:', err);
                    if (window.showAdminToast) {
                        window.showAdminToast('error', 'Network Error', 'Could not complete status toggle.');
                    }
                });
        }, true);
    }

    // -------------------------------------------------------------------------
    // 7. Universal Scroll Position Preservation System
    // -------------------------------------------------------------------------
    function initScrollPreservation() {
        const pageKey = 'admin_scroll_' + window.location.pathname;

        const savedScrollY = sessionStorage.getItem(pageKey);
        if (savedScrollY !== null) {
            const targetY = parseInt(savedScrollY, 10);
            if (!isNaN(targetY) && targetY > 0) {
                window.scrollTo({ top: targetY, behavior: 'instant' });
                setTimeout(() => {
                    window.scrollTo({ top: targetY, behavior: 'instant' });
                }, 60);
                setTimeout(() => {
                    window.scrollTo({ top: targetY, behavior: 'instant' });
                }, 200);
            }
            sessionStorage.removeItem(pageKey);
        }

        window.addEventListener('beforeunload', () => {
            sessionStorage.setItem(pageKey, window.scrollY);
        });

        document.addEventListener('submit', () => {
            sessionStorage.setItem(pageKey, window.scrollY);
        }, true);

        document.addEventListener('click', (e) => {
            const navLink = e.target.closest('.sidebar-nav a, .sidebar-brand');
            if (navLink) {
                const href = navLink.getAttribute('href');
                if (href && !href.startsWith('#') && !href.startsWith('javascript:')) {
                    try {
                        const targetUrl = new URL(href, window.location.href);
                        sessionStorage.removeItem('admin_scroll_' + targetUrl.pathname);
                    } catch (err) { }
                }
            }
        });
    }

    // -------------------------------------------------------------------------
    // Initialize
    // -------------------------------------------------------------------------
    let isInitialized = false;
    function init() {
        if (isInitialized) return;
        isInitialized = true;

        handleFlashMessages();
        initDeleteInterceptors();
        initLogoutInterceptors();
        initMobileNavigation();
        initStatusToggleInterceptors();
        initScrollPreservation();

        document.querySelectorAll('.admin-icon-picker-box').forEach(box => {
            const fieldName = box.getAttribute('data-icon-field');
            if (fieldName) {
                const rawInput = document.getElementById(fieldName);
                if (rawInput) {
                    updateIconPickerUI(fieldName, rawInput.value, false);
                }
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();