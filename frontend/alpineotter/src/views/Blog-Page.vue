<template>
    <div class="blog-page">
      <h1>Blog</h1>
      
      <!-- Widget della pagina Facebook -->
      <div class="fb-page" 
           data-href="https://www.facebook.com/alpineotter"
           data-tabs="timeline,events"
           data-width="420px"
           data-height="700px"
           data-small-header="false"
           data-adapt-container-width="true"
           data-hide-cover="false"
           data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/alpineotter" class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/alpineotter">Megan &amp; co</a>
        </blockquote>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'BlogPage',
    mounted() {
      // Passaggio 1: includi l'SDK JavaScript
      const fbRoot = document.createElement('div');
      fbRoot.id = 'fb-root';
      document.body.appendChild(fbRoot);
  
      const fbScript = document.createElement('script');
      fbScript.async = true;
      fbScript.defer = true;
      fbScript.crossOrigin = 'anonymous';
      fbScript.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v17.0';
      fbScript.nonce = 'W6vSLtby';
      document.body.appendChild(fbScript);
    },
  };
  </script>
  
  <style>

  </style>
  