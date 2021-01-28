function stickyBlock() {
    const stickyBanner = document.getElementById("id_sticky_baner")

    let t = document.getElementById("id_sticky_block_flip_btn"), e = document.getElementById("ac-1f"),
        o = document.getElementById("id_sticky_baner"), i = o.offsetHeight, n = 100, s = 40,
        l = document.getElementById("id_sticky_block"), c = 0, d = 0;
    window.addEventListener("scroll", function () {
        let y = window.pageYOffset, p = l.getBoundingClientRect().top, k = l.offsetHeight, g = window.innerHeight,
            u = l.parentElement.getBoundingClientRect().top;
        c > y && g < k - s - n ? 0 === d && p > n ? (d = 2, l.style.position = "sticky", l.style.top = n + "px") : 1 === d && (d = 0, l.style.position = "absolute", l.style.top = -1 * u - -1 * p + "px") : c < y && g < k - s - n ? (e.checked && o.getBoundingClientRect().top + i < n + 38 && (d = 2, l.style.position = "sticky", l.style.top = n + "px", t.click()), 0 === d && p + k < g - s ? e.checked || (d = 1, l.style.position = "sticky", l.style.top = g - k - s + "px") : 2 === d && (d = 0, l.style.position = "absolute", l.style.top = -1 * u - -1 * p + "px")) : g > k && (d = 2, l.style.position = "sticky", l.style.top = n + "px"), c = y
    })
}

document.addEventListener("DOMContentLoaded", stickyBlock);