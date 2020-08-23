        </div>
        <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/pdfjs-dist@2.0.489/build/pdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"> </script> 
        <script src="js/pdflesya.js"></script>
        <script>
          initPDFViewer("img/Вступ.pdf");
        </script>
        <script>
            const player = Plyr.setup('.jplayer');
            
            var mySwiper = new Swiper('.swiper-container', {
                direction: 'horizontal',
                loop: true,
              
                pagination: {
                  el: '.swiper-pagination',
                },
              
                navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
                },
                
                slidesPerView: 3,
                
                centeredSlides: true
            });
            
            function download(download_url, name){ 
                axios({ 
                    url:download_url, 
                    method:'GET', 
                    responseType: 'blob' 
            }) 
            .then((response) => { 
                   const url = window.URL 
                   .createObjectURL(new Blob([response.data])); 
                          const link = document.createElement('a'); 
                          link.href = url; 
                          link.setAttribute('download', name); 
                          document.body.appendChild(link); 
                          link.click(); 
            }) 
            } 
        </script>
    </body>
</html>