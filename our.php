<section class="oursection">
    <div class="our_card active" style='Background:url(Image/home1.jpg);'>
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zm-6-2h5V9.157l-6-5.454-6 5.454V19h5v-6h2v6z" fill="rgba(255,255,255,1)"/></svg>            </div>
            <div class="info">
                <div class="main">Lorem</div>
                <div class="sub">Lorem ipsum dolor </div>
            </div>
        </div>
    </div>
    <div class="our_card" style='Background:url(Image/home2.jpg);'>
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M21 3v2c0 9.627-5.373 14-12 14H5.243C5.08 19.912 5 20.907 5 22H3c0-1.363.116-2.6.346-3.732C3.116 16.974 3 15.218 3 13 3 7.477 7.477 3 13 3c2 0 4 1 8 0zm-8 2c-4.418 0-8 3.582-8 8 0 .362.003.711.01 1.046 1.254-1.978 3.091-3.541 5.494-4.914l.992 1.736C8.641 12.5 6.747 14.354 5.776 17H9c6.015 0 9.871-3.973 9.997-11.612-1.372.133-2.647.048-4.22-.188C13.627 5.027 13.401 5 13 5z" fill="rgba(255,255,255,1)"/></svg>
            </div>
            <div class="info">
                <div class="main">Lorem</div>
                <div class="sub">Lorem ipsum dolor </div>
            </div>
        </div>
    </div>
    <div class="our_card" style='Background:url(Image/home3.jpg);'>
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M8 5a4 4 0 1 1 8 0v5.255a7 7 0 1 1-8 0V5zm1.144 6.895a5 5 0 1 0 5.712 0L14 11.298V5a2 2 0 1 0-4 0v6.298l-.856.597zm1.856.231V5h2v7.126A4.002 4.002 0 0 1 12 20a4 4 0 0 1-1-7.874zM12 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" fill="rgba(255,255,255,1)"/></svg>
            </div>
            <div class="info">
                <div class="main">Lorem</div>
                <div class="sub">Lorem ipsum dolor </div>
            </div>
        </div>
    </div>
    <div class="our_card" style='Background:url(Image/home4.jpg);'>
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 3.1L7.05 8.05a7 7 0 1 0 9.9 0L12 3.1zm0-2.828l6.364 6.364a9 9 0 1 1-12.728 0L12 .272z" fill="rgba(255,255,255,1)"/></svg>
            </div>
            <div class="info">
                <div class="main">Lorem</div>
                <div class="sub">Lorem ipsum dolor </div>
            </div>
        </div>
    </div>
    <div class="our_card" style='Background:url(Image/home5.jpg);'>
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M.69 6.997A17.925 17.925 0 0 1 12 3c4.285 0 8.22 1.497 11.31 3.997l-1.256 1.556A15.933 15.933 0 0 0 12 5C8.191 5 4.694 6.33 1.946 8.553L.69 6.997zm3.141 3.89A12.946 12.946 0 0 1 12 8c3.094 0 5.936 1.081 8.169 2.886l-1.257 1.556A10.954 10.954 0 0 0 12 10c-2.618 0-5.023.915-6.912 2.442l-1.257-1.556zm3.142 3.89A7.967 7.967 0 0 1 12 13c1.904 0 3.653.665 5.027 1.776l-1.257 1.556A5.975 5.975 0 0 0 12 15c-1.428 0-2.74.499-3.77 1.332l-1.257-1.556zm3.142 3.89A2.987 2.987 0 0 1 12 18c.714 0 1.37.25 1.885.666L12 21l-1.885-2.334z" fill="rgba(255,255,255,1)"/></svg>
            </div>
            <div class="info">
                <div class="main">Lorem</div>
                <div class="sub">Lorem ipsum dolor </div>
            </div>
        </div>
    </div>
</section>
<script>
    const options = document.querySelectorAll(".our_card")
    console.log(options)
    options.forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll(".our_card").forEach(removeActive => {
                removeActive.classList.remove("active")
            })
            option.classList.add("active")
        })
    })
    /* DarkMode */

    const dark = document.querySelector('.darkmode-btn');

    dark.addEventListener('click', () => {
        console.log("Boutton cliqué");
        const body = document.body;
        const htmlbg = document.querySelector('.html')
        
        if(body.classList.contains('dark')){
            console.log("Mode changé sur Dark");
                body.classList.add('light');
                body.classList.remove('dark');
                dark.style.transform = "rotate(180deg)"
                dark.style.filter = "invert(1)"


        } else{
            console.log("Mode changé sur Light");
                body.classList.add('dark');
                body.classList.remove('light');
                dark.style.transform = "rotate(0deg)"
                dark.style.filter = "invert(0)"
            }
    })
</script>