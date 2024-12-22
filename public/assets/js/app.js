$(window).on("load", function () {
    const elem = document.querySelector(".mansory");
    new Masonry(elem, {
        // options
        itemSelector: ".mansory-item",
        columnWidth: 200,
        gutter: 20,
        columnWidth: ".mansory-sizer",
        percentPosition: true,
    });

    $(".btn-to-top").click(function () {
        $("html", "body").animate(
            {
                scrollTop: 0,
            },
            1500,
            "easeInOutExpo"
        );
    });

    AOS.init();

    const portfolioIsotope = $(".portfolio-container").isotope({
        itemSelector: ".portfolio-item",
    });

    $(".portfolio-filter li").click(function () {
        $(".portfolio-filter li").removeClass("filter-active");
        $(".portfolio-filter li").removeClass("text-white");
        $(this).addClass("filter-active");
        $(this).addClass("text-white");

        portfolioIsotope.isotope({
            filter: $(this).data("filter"),
        });

        AOS.init();
    });
});

const multipleItemCarousel = document.querySelector("#testimonialCarousel");

if (window.matchMedia("(min-width:576px)").matches) {
    const $testiInner = $(".testi-inner");
    const $testiItems = $(".testi-item");
    const cardWidth = $testiItems.outerWidth(true); // Termasuk margin
    const totalCards = $testiItems.length;

    // Duplikasi elemen pertama ke akhir
    $testiInner.append($testiItems.clone());

    let scrollPosition = 0;
    let autoScrollInterval; // Variabel untuk menyimpan interval

    function autoScroll() {
        scrollPosition += 1; // Kecepatan gerakan (1px per frame)

        if (scrollPosition >= cardWidth * totalCards) {
            // Reset ke awal tanpa animasi jika mencapai elemen duplikat
            scrollPosition = 0;
            $testiInner.scrollLeft(0);
        } else {
            // Scroll dengan animasi
            $testiInner.scrollLeft(scrollPosition);
        }
    }

    function startAutoScroll() {
        if (!autoScrollInterval) {
            autoScrollInterval = setInterval(autoScroll, 10); // Mulai animasi
        }
    }

    function stopAutoScroll() {
        clearInterval(autoScrollInterval); // Hentikan animasi
        autoScrollInterval = null; // Reset variabel interval
    }

    // Mulai animasi otomatis saat halaman dimuat
    startAutoScroll();

    // Opsional: Hentikan animasi saat hover
    $testiInner.hover(
        function () {
            stopAutoScroll(); // Hentikan animasi saat hover
        },
        function () {
            startAutoScroll(); // Lanjutkan animasi setelah hover
        }
    );
} else {
    $(multipleItemCarousel).addClass("slide");
}
