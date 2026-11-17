/**
 * GỌN KHỎE by Qcare - GYM PARTNERSHIP INTERACTION LOGIC
 */

document.addEventListener('DOMContentLoaded', function () {
    initHeaderScroll();
    initMobileNav();
    initRevenueCalculator();
    initFaqAccordion();
    initPartnershipForm();
    initSmoothScroll();
    initScrollTopBtn();
});

/* ==========================================================================
   1. STICKY HEADER EFFECT
   ========================================================================== */
function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

/* ==========================================================================
   2. MOBILE NAVIGATION DRAWER
   ========================================================================== */
function initMobileNav() {
    const toggleBtn = document.getElementById('mobileNavToggle');
    const drawer = document.getElementById('mobileNavDrawer');
    const closeBtn = document.getElementById('mobileNavClose');
    const backdrop = document.getElementById('mobileNavBackdrop');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    if (!toggleBtn || !drawer) return;

    function openDrawer() {
        drawer.classList.add('open');
        if (backdrop) backdrop.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        drawer.classList.remove('open');
        if (backdrop) backdrop.classList.remove('active');
        document.body.style.overflow = '';
    }

    toggleBtn.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (backdrop) backdrop.addEventListener('click', closeDrawer);

    mobileLinks.forEach(link => {
        link.addEventListener('click', closeDrawer);
    });
}

/* ==========================================================================
   3. INTERACTIVE PT REVENUE CALCULATOR (Slide 13)
   ========================================================================== */
function initRevenueCalculator() {
    const sliderMembers = document.getElementById('calcMembers');
    const sliderSessions = document.getElementById('calcSessions');
    const sliderPrice = document.getElementById('calcPrice');
    const sliderMargin = document.getElementById('calcMargin');

    const dispMembers = document.getElementById('dispMembers');
    const dispSessions = document.getElementById('dispSessions');
    const dispPrice = document.getElementById('dispPrice');
    const dispMargin = document.getElementById('dispMargin');

    const resultTotalSessions = document.getElementById('calcTotalSessions');
    const resultRevenue = document.getElementById('calcRevenue');
    const resultProfit = document.getElementById('calcProfit');
    const resultProfitMargin = document.getElementById('calcProfitMargin');

    const tabBtns = document.querySelectorAll('.calc-tab-btn');

    if (!sliderMembers || !sliderSessions || !sliderPrice) return;

    // Formatting currency
    function formatCurrencyVND(amount) {
        return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(amount).replace('₫', 'đ');
    }

    function calculateValues() {
        const members = parseInt(sliderMembers.value, 10);
        const sessionsPerMember = parseInt(sliderSessions.value, 10);
        const pricePerSession = parseInt(sliderPrice.value, 10);
        const marginPercent = parseInt(sliderMargin.value, 10);

        const totalSessions = members * sessionsPerMember;
        const totalRevenue = totalSessions * pricePerSession;
        const netContribution = Math.round(totalRevenue * (marginPercent / 100));

        // Update control labels
        dispMembers.textContent = members + ' hội viên';
        dispSessions.textContent = sessionsPerMember + ' buổi/người';
        dispPrice.textContent = new Intl.NumberFormat('vi-VN').format(pricePerSession) + ' đ';
        dispMargin.textContent = marginPercent + '%';

        // Update result display
        if (resultTotalSessions) resultTotalSessions.textContent = totalSessions + ' buổi PT';
        if (resultRevenue) resultRevenue.textContent = formatCurrencyVND(totalRevenue);
        if (resultProfit) resultProfit.textContent = formatCurrencyVND(netContribution);
        if (resultProfitMargin) resultProfitMargin.textContent = marginPercent + '%';
    }

    // Sliders event listeners
    [sliderMembers, sliderSessions, sliderPrice, sliderMargin].forEach(slider => {
        if (slider) {
            slider.addEventListener('input', () => {
                // Remove active from predefined tabs if user manually drags
                tabBtns.forEach(btn => btn.classList.remove('active'));
                calculateValues();
            });
        }
    });

    // Preset Tabs (from PDF Slide 13: Thận trọng: 3 HV, Cơ sở: 6 HV, Tích cực: 10 HV)
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            tabBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const preset = this.getAttribute('data-preset');
            if (preset === 'conservative') {
                sliderMembers.value = 3;
                sliderSessions.value = 8;
                sliderPrice.value = 300000;
                sliderMargin.value = 40;
            } else if (preset === 'base') {
                sliderMembers.value = 6;
                sliderSessions.value = 8;
                sliderPrice.value = 300000;
                sliderMargin.value = 40;
            } else if (preset === 'optimistic') {
                sliderMembers.value = 10;
                sliderSessions.value = 8;
                sliderPrice.value = 300000;
                sliderMargin.value = 40;
            }
            calculateValues();
        });
    });

    // Run initial calculation
    calculateValues();
}

/* ==========================================================================
   4. FAQ ACCORDION (Slide 19)
   ========================================================================== */
function initFaqAccordion() {
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', function () {
            const parentItem = this.closest('.faq-item');
            const isActive = parentItem.classList.contains('active');

            // Close other items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });

            // Toggle clicked item
            if (!isActive) {
                parentItem.classList.add('active');
            }
        });
    });
}

/* ==========================================================================
   5. PARTNERSHIP BOOKING FORM
   ========================================================================== */
function initPartnershipForm() {
    const form = document.getElementById('partnershipForm');
    const successAlert = document.getElementById('formSuccessAlert');

    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const nameInput = document.getElementById('formName');
        const phoneInput = document.getElementById('formPhone');

        if (!nameInput.value.trim() || !phoneInput.value.trim()) {
            alert('Vui lòng điền họ tên và số điện thoại liên hệ.');
            return;
        }

        const submitBtn = form.querySelector('.form-submit-btn');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang ghi nhận đăng ký...';

        setTimeout(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
            if (successAlert) {
                successAlert.style.display = 'block';
                successAlert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
            form.reset();
        }, 800);
    });
}

/* ==========================================================================
   6. SMOOTH SCROLLING FOR IN-PAGE ANCHORS
   ========================================================================== */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                const headerOffset = 90;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/* ==========================================================================
   7. SCROLL TO TOP BUTTON
   ========================================================================== */
function initScrollTopBtn() {
    const scrollBtn = document.getElementById('scrollTopBtn');
    if (!scrollBtn) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 250) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
        }
    });

    scrollBtn.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}
