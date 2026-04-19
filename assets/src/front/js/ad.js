(function() {

    // ❌ Disable klik kanan
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

    // ❌ Disable select text
    document.addEventListener('selectstart', function(e) {
        e.preventDefault();
    });

    // ❌ Disable drag
    document.addEventListener('dragstart', function(e) {
        e.preventDefault();
    });

    // ❌ Disable shortcut keyboard
    document.addEventListener('keydown', function(e) {

        if (e.ctrlKey && (
            e.key.toLowerCase() === 'c' ||
            e.key.toLowerCase() === 'v' ||
            e.key.toLowerCase() === 'u' ||
            e.key.toLowerCase() === 's' ||
            e.key.toLowerCase() === 'a'
        )) {
            e.preventDefault();
        }

        if (e.key === 'F12') {
            e.preventDefault();
        }

        if (e.ctrlKey && e.shiftKey && (
            e.key.toLowerCase() === 'i' ||
            e.key.toLowerCase() === 'j' ||
            e.key.toLowerCase() === 'c'
        )) {
            e.preventDefault();
        }

    });

    // 😈 Deteksi DevTools
    setInterval(function() {
        if (window.outerWidth - window.innerWidth > 100 || 
            window.outerHeight - window.innerHeight > 100) {

            document.body.innerHTML = "<h1 style='text-align:center;margin-top:20%;'>⚠️ Akses Ditolak</h1>";
        }
    }, 1000);

})();