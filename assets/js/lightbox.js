module.exports = {
    lightbox: function ($) {
        var arrSrc = [],
            arrTitle = []
            , currentLink
            , currentLinkIndex
            , next
            , prev
            , $triggerAnchor = document.querySelectorAll('.lightbox-trigger')
            , $iframeElement = document.querySelector('#slider iframe')
            , $lightbox = document.getElementById('lightbox')
            , $mailBtn = document.querySelector('#share-box .mail')
            , $printBtn = document.querySelector('#share-box .print')
            , $fbBtn = document.querySelector('#share-box .fb')
            , $gplusBtn = document.querySelector('#share-box .gplus')
            , $linkedBtn = document.querySelector('#share-box .linkedin')
            , $twitBtn = document.querySelector('#share-box .twitter')
            , currentJobTitle;

        loadSrc();

        //get source

        function loadSrc() {

            for (var i = 0, l = $triggerAnchor.length; i < l; i++) {
                arrSrc.push($triggerAnchor[i].href);
                arrTitle.push($triggerAnchor[i].innerText);
            }

        }

        // get href & index of clicked element
        for (var i = 0, l = $triggerAnchor.length; i < l; i++) {
            $triggerAnchor[i].addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                currentLink = this.getAttribute('href');
                currentJobTitle = this.innerText;
                setSrc(currentLink, function () {
                    getNeighbours(currentLink);
                    displayLightbox();
                    getSize();
                });
            })
        }

        //get Neighbours
        function getNeighbours(curLink, curTitle) {

            currentLinkIndex = arrSrc.indexOf(curLink)

            if ((currentLinkIndex - 1) < 0) {
                prev = (arrSrc.length - 1);
                next = (currentLinkIndex + 1);
            } else if ((currentLinkIndex + 1) > (arrSrc.length - 1)) {

                prev = (currentLinkIndex - 1);
                next = 0;

            } else {
                prev = (currentLinkIndex - 1);
                next = (currentLinkIndex + 1);
            }
        }

        // //setting src of iframe
        function setSrc(elLink, cb) {
            $iframeElement.src = elLink;
            $printBtn.href = elLink;
            $printBtn.setAttribute('target', '_blank');

            $($iframeElement).on('load', cb);
        }

        //create/fadeIn Lightbox
        function displayLightbox() {
            $($lightbox).fadeIn(300);
        }

        //Lightbox Navigation

        $('.prev').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $($iframeElement).removeClass('iframe-slideIn').css(
                {
                    'left': '20px',
                    'opacity': 0
                });
            currentLink = arrSrc[prev];
            currentJobTitle = arrTitle[prev];
            setSrc(currentLink);
            getNeighbours(currentLink);
            setTimeout(function () {
                $($iframeElement).addClass('iframe-slideIn');
            }, 200);

        });

        $('.next').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $($iframeElement).removeClass('iframe-slideIn').css(
                {
                    'left': '20px',
                    'opacity': 0
                });
            currentLink = arrSrc[next];
            currentJobTitle = arrTitle[next];
            setSrc(currentLink);
            getNeighbours(currentLink);
            setTimeout(function () {
                $($iframeElement).addClass('iframe-slideIn');
            }, 200);
        });

        function getSize() {
            var width = window.innerWidth,
                $sharebox = document.getElementById('share-box');

            if (width > 1300) {
                $sharebox.classList.remove('slideInUp');
                setTimeout(function () {
                    $sharebox.classList.add('slideIn');
                }, 200);
            } else {
                $sharebox.classList.remove('slideIn');
                setTimeout(function () {
                    $sharebox.classList.add('slideInUp');
                }, 200);
            }
        }

        $(window).resize(function () {
            getSize();
        });


        $('body').on('click', '#lightbox', function () {
            var width = window.innerWidth;
            $($lightbox).fadeOut(300);
            if (width > 992) {
                $('#share-box').removeClass('slideIn')
            } else {
                $('#share-box').removeClass('slideInUp')
            }
        });

        $mailBtn.addEventListener('click', function (e) {
            const locale = window.JbConfig.generalObject.lang;
            if (typeof configMailingText === "undefined") {
                if (locale === 'de') {
                    $mailBtn.setAttribute('href', 'mailto:?subject=Interessanter Job: „' + encodeURIComponent(currentJobTitle) + '“&body=Hallo,%0D%0Aich habe folgende interessante Stelle entdeckt:%0D%0A' + encodeURIComponent(currentLink));
                } else if (locale === 'en') {
                    $mailBtn.setAttribute('href', 'mailto:?subject=Interesting job: „' + encodeURIComponent(currentJobTitle) + '“&body=Hi,%0D%0AI found this job and thought you might find it interesting:%0D%0A' + encodeURIComponent(currentLink));
                }
            } else {
                if (locale === 'de') {
                    $mailBtn.setAttribute('href', 'mailto:?subject=' + configMailingText.shareButtonSubject.de + '„' + encodeURIComponent(currentJobTitle) + '“&body=' + configMailingText.shareButtonBodyText.de + '%0D%0A' + encodeURIComponent(currentLink));
                } else if (locale === 'en') {
                    $mailBtn.setAttribute('href', 'mailto:?subject=Interesting job at Munich Re: „' + encodeURIComponent(currentJobTitle) + '“&body=Hi,%0D%0AI found this job at Munich Re (Group) and thought you might find it interesting:%0D%0A' + encodeURIComponent(currentLink));
                }
            }
            e.stopPropagation();
        });

        $fbBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + currentLink, "pop", "width=600, height=400, scrollbars=no");
            return false;
        });

        $twitBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            window.open('http://twitter.com/home?status=' + currentLink, "pop", "width=600, height=400, scrollbars=no");
            return false;
        });

        $gplusBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            window.open('https://plus.google.com/share?url=' + currentLink, "pop", "width=600, height=400, scrollbars=no");
            return false;
        });

        $linkedBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            window.open('https://www.linkedin.com/cws/share?url=' + currentLink, "pop", "width=600, height=400, scrollbars=no");
            return false;
        });

        // $printBtn.addEventListener('click', function(e) {
        //     e.preventDefault();
        //     e.stopPropagation();
        //     window.onload = function(){
        //         var frm = document.querySelector('#lightbox iframe').contentWindow;
        //         frm.focus();// focus on contentWindow is needed on some ie versions
        //         frm.print();
        //         return false;
        //     }
        // })
    }
};