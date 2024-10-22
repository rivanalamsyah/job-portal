"use strict";
! function() {
    var e, t; - 1 < navigator.platform.indexOf("Win") && (document.getElementsByClassName("main-content")[0] && (e = document.querySelector(".main-content"), new PerfectScrollbar(e)), document.getElementsByClassName("sidenav")[0] && (e = document.querySelector(".sidenav"), new PerfectScrollbar(e)), document.getElementsByClassName("navbar-collapse")[0] && (t = document.querySelector(".navbar:not(.navbar-expand-lg) .navbar-collapse"), new PerfectScrollbar(t)), document.getElementsByClassName("fixed-plugin")[0] && (t = document.querySelector(".fixed-plugin"), new PerfectScrollbar(t)))
}(), document.getElementById("navbarBlur") && navbarBlurOnScroll("navbarBlur");
var allInputs, fixedPlugin, fixedPluginButton, fixedPluginButtonNav, fixedPluginCard, fixedPluginCloseButton, navbar, buttonNavbarFixed, tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')),
    tooltipList = tooltipTriggerList.map(function(e) {
        return new bootstrap.Tooltip(e)
    });

function focused(e) {
    e.parentElement.classList.contains("input-group") && e.parentElement.classList.add("focused")
}

function defocused(e) {
    e.parentElement.classList.contains("input-group") && e.parentElement.classList.remove("focused")
}

function setAttributes(t, s) {
    Object.keys(s).forEach(function(e) {
        t.setAttribute(e, s[e])
    })
}

function sidebarColor(e) {
    for (var t = e.parentElement.children, s = e.getAttribute("data-color"), a = 0; a < t.length; a++) t[a].classList.remove("active");
    e.classList.contains("active") ? e.classList.remove("active") : e.classList.add("active"), document.querySelector(".sidenav").setAttribute("data-color", s), document.querySelector("#sidenavCard") && (e = ["btn", "btn-sm", "w-100", "mb-0", "bg-gradient-" + s], (s = document.querySelector("#sidenavCard+.btn+.btn")).removeAttribute("class"), s.classList.add(...e))
}

function sidebarType(e) {
    for (var t = e.parentElement.children, s = e.getAttribute("data-class"), a = document.querySelector("body"), n = document.querySelector("body:not(.dark-version)"), a = a.classList.contains("dark-version"), i = [], l = 0; l < t.length; l++) t[l].classList.remove("active"), i.push(t[l].getAttribute("data-class"));
    e.classList.contains("active") ? e.classList.remove("active") : e.classList.add("active");
    for (var r, o, c, d = document.querySelector(".sidenav"), l = 0; l < i.length; l++) d.classList.remove(i[l]);
    if (d.classList.add(s), "bg-white" == s) {
        var u = document.querySelectorAll(".sidenav .text-white");
        for (let e = 0; e < u.length; e++) u[e].classList.remove("text-white"), u[e].classList.add("text-dark")
    } else {
        var v = document.querySelectorAll(".sidenav .text-dark");
        for (let e = 0; e < v.length; e++) v[e].classList.add("text-white"), v[e].classList.remove("text-dark")
    }
    if ("bg-default" == s && a) {
        v = document.querySelectorAll(".navbar-brand .text-dark");
        for (let e = 0; e < v.length; e++) v[e].classList.add("text-white"), v[e].classList.remove("text-dark")
    }
    "bg-white" == s && n ? (o = (r = document.querySelector(".navbar-brand-img")).src).includes("logo-ct.png") && (c = o.replace("logo-ct", "logo-ct-dark"), r.src = c) : (o = (r = document.querySelector(".navbar-brand-img")).src).includes("logo-ct-dark.png") && (c = o.replace("logo-ct-dark", "logo-ct"), r.src = c), "bg-white" == s && a && (o = (r = document.querySelector(".navbar-brand-img")).src).includes("logo-ct.png") && (c = o.replace("logo-ct", "logo-ct-dark"), r.src = c)
}

function navbarFixed(e) {
    var t = ["position-sticky", "bg-white", "left-auto", "top-2", "z-index-sticky"];
    const s = document.getElementById("navbarBlur");
    e.getAttribute("checked") ? (toggleNavLinksColor("transparent"), s.classList.remove(...t), s.setAttribute("data-scroll", "false"), navbarBlurOnScroll("navbarBlur"), e.removeAttribute("checked")) : (toggleNavLinksColor("blur"), s.classList.add(...t), s.setAttribute("data-scroll", "true"), navbarBlurOnScroll("navbarBlur"), e.setAttribute("checked", "true"))
}

function navbarMinimize(e) {
    var t = document.getElementsByClassName("g-sidenav-show")[0];
    e.getAttribute("checked") ? (t.classList.remove("g-sidenav-hidden"), t.classList.add("g-sidenav-pinned"), e.removeAttribute("checked")) : (t.classList.remove("g-sidenav-pinned"), t.classList.add("g-sidenav-hidden"), e.setAttribute("checked", "true"))
}

function toggleNavLinksColor(e) {
    let t = document.querySelectorAll(".navbar-main .nav-link, .navbar-main .breadcrumb-item, .navbar-main .breadcrumb-item a, .navbar-main h6"),
        s = document.querySelectorAll(".navbar-main .sidenav-toggler-line");
    "blur" === e ? (t.forEach(e => {
        e.classList.remove("text-white")
    }), s.forEach(e => {
        e.classList.add("bg-dark"), e.classList.remove("bg-white")
    })) : "transparent" === e && (t.forEach(e => {
        e.classList.add("text-white")
    }), s.forEach(e => {
        e.classList.remove("bg-dark"), e.classList.add("bg-white")
    }))
}

function navbarBlurOnScroll(e) {
    const t = document.getElementById(e);
    var s, e = !!t && t.getAttribute("data-scroll");
    let a = ["bg-white", "left-auto", "position-sticky"],
        n = ["shadow-none"];

    function i() {
        t.classList.add(...a), t.classList.remove(...n), toggleNavLinksColor("blur")
    }

    function l() {
        t.classList.remove(...a), t.classList.add(...n), toggleNavLinksColor("transparent")
    }
    window.onscroll = debounce("true" == e ? function() {
        (5 < window.scrollY ? i : l)()
    } : function() {
        l()
    }, 10), -1 < navigator.platform.indexOf("Win") && (s = document.querySelector(".main-content"), "true" == e ? s.addEventListener("ps-scroll-y", debounce(function() {
        (5 < s.scrollTop ? i : l)()
    }, 10)) : s.addEventListener("ps-scroll-y", debounce(function() {
        l()
    }, 10)))
}

function debounce(a, n, i) {
    var l;
    return function() {
        var e = this,
            t = arguments,
            s = i && !l;
        clearTimeout(l), l = setTimeout(function() {
            l = null, i || a.apply(e, t)
        }, n), s && a.apply(e, t)
    }
}
0 != document.querySelectorAll(".input-group").length && (allInputs = document.querySelectorAll("input.form-control")).forEach(e => setAttributes(e, {
    onfocus: "focused(this)",
    onfocusout: "defocused(this)"
})), document.querySelector(".fixed-plugin") && (fixedPlugin = document.querySelector(".fixed-plugin"), fixedPluginButton = document.querySelector(".fixed-plugin-button"), fixedPluginButtonNav = document.querySelector(".fixed-plugin-button-nav"), fixedPluginCard = document.querySelector(".fixed-plugin .card"), fixedPluginCloseButton = document.querySelectorAll(".fixed-plugin-close-button"), navbar = document.getElementById("navbarBlur"), buttonNavbarFixed = document.getElementById("navbarFixed"), fixedPluginButton && (fixedPluginButton.onclick = function() {
    fixedPlugin.classList.contains("show") ? fixedPlugin.classList.remove("show") : fixedPlugin.classList.add("show")
}), fixedPluginButtonNav && (fixedPluginButtonNav.onclick = function() {
    fixedPlugin.classList.contains("show") ? fixedPlugin.classList.remove("show") : fixedPlugin.classList.add("show")
}), fixedPluginCloseButton.forEach(function(e) {
    e.onclick = function() {
        fixedPlugin.classList.remove("show")
    }
}), document.querySelector("body").onclick = function(e) {
    e.target != fixedPluginButton && e.target != fixedPluginButtonNav && e.target.closest(".fixed-plugin .card") != fixedPluginCard && fixedPlugin.classList.remove("show")
}, navbar && "true" == navbar.getAttribute("data-scroll") && buttonNavbarFixed && buttonNavbarFixed.setAttribute("checked", "true"));
const iconNavbarSidenav = document.getElementById("iconNavbarSidenav"),
    iconSidenav = document.getElementById("iconSidenav"),
    sidenav = document.getElementById("sidenav-main");
let body = document.getElementsByTagName("body")[0],
    className = "g-sidenav-pinned";

function toggleSidenav() {
    body.classList.contains(className) ? (body.classList.remove(className), setTimeout(function() {
        sidenav.classList.remove("bg-white")
    }, 100), sidenav.classList.remove("bg-transparent")) : (body.classList.add(className), sidenav.classList.add("bg-white"), sidenav.classList.remove("bg-transparent"), iconSidenav.classList.remove("d-none"))
}
iconNavbarSidenav && iconNavbarSidenav.addEventListener("click", toggleSidenav), iconSidenav && iconSidenav.addEventListener("click", toggleSidenav);
let html = document.getElementsByTagName("html")[0],
    referenceButtons = (html.addEventListener("click", function(e) {
        body.classList.contains("g-sidenav-pinned") && !e.target.classList.contains("sidenav-toggler-line") && body.classList.remove(className)
    }), document.querySelector("[data-class]"));

function navbarColorOnResize() {
    1200 < window.innerWidth ? referenceButtons.classList.contains("active") && "bg-transparent" === referenceButtons.getAttribute("data-class") ? sidenav.classList.remove("bg-white") : body.classList.contains("dark-version") || sidenav.classList.add("bg-white") : (sidenav.classList.add("bg-white"), sidenav.classList.remove("bg-transparent"))
}

function sidenavTypeOnResize() {
    let e = document.querySelectorAll('[onclick="sidebarType(this)"]');
    window.innerWidth < 1200 ? e.forEach(function(e) {
        e.classList.add("disabled")
    }) : e.forEach(function(e) {
        e.classList.remove("disabled")
    })
}
window.addEventListener("resize", navbarColorOnResize), window.addEventListener("resize", sidenavTypeOnResize), window.addEventListener("load", sidenavTypeOnResize);
var total = document.querySelectorAll(".nav-pills");

function getEventTarget(e) {
    return (e = e || window.event).target || e.srcElement
}

function darkMode(e) {
    const t = document.getElementsByTagName("body")[0],
        s = document.querySelectorAll("div:not(.sidenav) > hr"),
        a = document.querySelector(".sidenav"),
        n = document.querySelectorAll(".sidenav.bg-white"),
        i = document.querySelectorAll("div:not(.bg-gradient-dark) hr"),
        l = document.querySelectorAll("button:not(.btn) > .text-dark"),
        r = document.querySelectorAll("span.text-dark, .breadcrumb .text-dark"),
        o = document.querySelectorAll("span.text-white"),
        c = document.querySelectorAll("strong.text-dark"),
        d = document.querySelectorAll("strong.text-white"),
        u = document.querySelectorAll("a.nav-link.text-dark"),
        v = document.querySelectorAll(".text-secondary"),
        g = document.querySelectorAll(".bg-gray-100"),
        m = document.querySelectorAll(".bg-gray-600"),
        f = document.querySelectorAll(".btn.btn-link.text-dark, .btn .ni.text-dark"),
        h = document.querySelectorAll(".btn.btn-link.text-white, .btn .ni.text-white"),
        b = document.querySelectorAll(".card.border"),
        L = document.querySelectorAll(".card.border.border-dark"),
        x = document.querySelectorAll("g"),
        y = document.querySelector(".navbar-brand-img"),
        p = y.src,
        k = document.querySelectorAll(".navbar-main .nav-link, .navbar-main .breadcrumb-item, .navbar-main .breadcrumb-item a, .navbar-main h6"),
        S = document.querySelectorAll(".card .nav .nav-link i"),
        w = document.querySelectorAll(".card .nav .nav-link span");
    if (e.getAttribute("checked")) {
        t.classList.remove("dark-version"), a.classList.add("bg-white"), p.includes("logo-ct.png") && (q = p.replace("logo-ct", "logo-ct-dark"), y.src = q);
        for (A = 0; A < k.length; A++) k[A].classList.contains("text-dark") && (k[A].classList.add("text-white"), k[A].classList.remove("text-dark"));
        for (A = 0; A < S.length; A++) S[A].classList.contains("text-white") && (S[A].classList.remove("text-white"), S[A].classList.add("text-dark"));
        for (A = 0; A < w.length; A++) w[A].classList.contains("text-white") && w[A].classList.remove("text-white");
        for (A = 0; A < s.length; A++) s[A].classList.contains("light") && (s[A].classList.add("dark"), s[A].classList.remove("light"));
        for (A = 0; A < i.length; A++) i[A].classList.contains("light") && (i[A].classList.add("dark"), i[A].classList.remove("light"));
        for (A = 0; A < l.length; A++) l[A].classList.contains("text-white") && (l[A].classList.remove("text-white"), l[A].classList.add("text-dark"));
        for (A = 0; A < o.length; A++) !o[A].classList.contains("text-white") || o[A].closest(".sidenav") || o[A].closest(".card.bg-gradient-dark") || (o[A].classList.remove("text-white"), o[A].classList.add("text-dark"));
        for (A = 0; A < d.length; A++) d[A].classList.contains("text-white") && (d[A].classList.remove("text-white"), d[A].classList.add("text-dark"));
        for (A = 0; A < v.length; A++) v[A].classList.contains("text-white") && (v[A].classList.remove("text-white"), v[A].classList.remove("opacity-8"), v[A].classList.add("text-dark"));
        for (A = 0; A < m.length; A++) m[A].classList.contains("bg-gray-600") && (m[A].classList.remove("bg-gray-600"), m[A].classList.add("bg-gray-100"));
        for (A = 0; A < x.length; A++) x[A].hasAttribute("fill") && x[A].setAttribute("fill", "#252f40");
        for (A = 0; A < h.length; A++) h[A].closest(".card.bg-gradient-dark") || (h[A].classList.remove("text-white"), h[A].classList.add("text-dark"));
        for (A = 0; A < L.length; A++) L[A].classList.remove("border-dark");
        e.removeAttribute("checked")
    } else {
        var q;
        t.classList.add("dark-version"), p.includes("logo-ct-dark.png") && (q = p.replace("logo-ct-dark", "logo-ct"), y.src = q);
        for (var A = 0; A < S.length; A++) S[A].classList.contains("text-dark") && (S[A].classList.remove("text-dark"), S[A].classList.add("text-white"));
        for (var A = 0; A < w.length; A++) w[A].classList.contains("text-sm") && w[A].classList.add("text-white");
        for (var A = 0; A < s.length; A++) s[A].classList.contains("dark") && (s[A].classList.remove("dark"), s[A].classList.add("light"));
        for (var A = 0; A < i.length; A++) i[A].classList.contains("dark") && (i[A].classList.remove("dark"), i[A].classList.add("light"));
        for (var A = 0; A < l.length; A++) l[A].classList.contains("text-dark") && (l[A].classList.remove("text-dark"), l[A].classList.add("text-white"));
        for (var A = 0; A < r.length; A++) r[A].classList.contains("text-dark") && (r[A].classList.remove("text-dark"), r[A].classList.add("text-white"));
        for (var A = 0; A < c.length; A++) c[A].classList.contains("text-dark") && (c[A].classList.remove("text-dark"), c[A].classList.add("text-white"));
        for (var A = 0; A < u.length; A++) u[A].classList.contains("text-dark") && (u[A].classList.remove("text-dark"), u[A].classList.add("text-white"));
        for (var A = 0; A < v.length; A++) v[A].classList.contains("text-secondary") && (v[A].classList.remove("text-secondary"), v[A].classList.add("text-white"), v[A].classList.add("opacity-8"));
        for (var A = 0; A < g.length; A++) g[A].classList.contains("bg-gray-100") && (g[A].classList.remove("bg-gray-100"), g[A].classList.add("bg-gray-600"));
        for (var A = 0; A < f.length; A++) f[A].classList.remove("text-dark"), f[A].classList.add("text-white");
        for (var A = 0; A < n.length; A++) n[A].classList.remove("bg-white");
        for (var A = 0; A < x.length; A++) x[A].hasAttribute("fill") && x[A].setAttribute("fill", "#fff");
        for (var A = 0; A < b.length; A++) b[A].classList.add("border-dark");
        e.setAttribute("checked", "true")
    }
}
total.forEach(function(i, e) {
    var l = document.createElement("div"),
        t = i.querySelector("li:first-child .nav-link").cloneNode();
    t.innerHTML = "-", l.classList.add("moving-tab", "position-absolute", "nav-link"), l.appendChild(t), i.appendChild(l), i.getElementsByTagName("li").length;
    l.style.padding = "0px", l.style.width = i.querySelector("li:nth-child(1)").offsetWidth + "px", l.style.transform = "translate3d(0px, 0px, 0px)", l.style.transition = ".5s ease", i.onmouseover = function(e) {
        let t = getEventTarget(e),
            n = t.closest("li");
        if (n) {
            let s = Array.from(n.closest("ul").children),
                a = s.indexOf(n) + 1;
            i.querySelector("li:nth-child(" + a + ") .nav-link").onclick = function() {
                l = i.querySelector(".moving-tab");
                let e = 0;
                if (i.classList.contains("flex-column")) {
                    for (var t = 1; t <= s.indexOf(n); t++) e += i.querySelector("li:nth-child(" + t + ")").offsetHeight;
                    l.style.transform = "translate3d(0px," + e + "px, 0px)", l.style.height = i.querySelector("li:nth-child(" + t + ")").offsetHeight
                } else {
                    for (t = 1; t <= s.indexOf(n); t++) e += i.querySelector("li:nth-child(" + t + ")").offsetWidth;
                    l.style.transform = "translate3d(" + e + "px, 0px, 0px)", l.style.width = i.querySelector("li:nth-child(" + a + ")").offsetWidth + "px"
                }
            }
        }
    }
}), window.addEventListener("resize", function(e) {
    total.forEach(function(s, e) {
        s.querySelector(".moving-tab").remove();
        var a = document.createElement("div"),
            n = s.querySelector(".nav-link.active").cloneNode();
        n.innerHTML = "-", a.classList.add("moving-tab", "position-absolute", "nav-link"), a.appendChild(n), s.appendChild(a), a.style.padding = "0px", a.style.transition = ".5s ease";
        let i = s.querySelector(".nav-link.active").parentElement;
        if (i) {
            let e = Array.from(i.closest("ul").children);
            n = e.indexOf(i) + 1;
            let t = 0;
            if (s.classList.contains("flex-column")) {
                for (var l = 1; l <= e.indexOf(i); l++) t += s.querySelector("li:nth-child(" + l + ")").offsetHeight;
                a.style.transform = "translate3d(0px," + t + "px, 0px)", a.style.width = s.querySelector("li:nth-child(" + n + ")").offsetWidth + "px", a.style.height = s.querySelector("li:nth-child(" + l + ")").offsetHeight
            } else {
                for (l = 1; l <= e.indexOf(i); l++) t += s.querySelector("li:nth-child(" + l + ")").offsetWidth;
                a.style.transform = "translate3d(" + t + "px, 0px, 0px)", a.style.width = s.querySelector("li:nth-child(" + n + ")").offsetWidth + "px"
            }
        }
    }), window.innerWidth < 991 ? total.forEach(function(e, t) {
        e.classList.contains("flex-column") || e.classList.add("flex-column", "on-resize")
    }) : total.forEach(function(e, t) {
        e.classList.contains("on-resize") && e.classList.remove("flex-column", "on-resize")
    })
});
//# sourceMappingURL=_site_dashboard_free/assets/js/dashboard-free.js.map