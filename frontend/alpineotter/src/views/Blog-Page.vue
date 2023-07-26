<template>
    <div class="blog-page">
      <h1>Blog</h1>
      <div class="fb-page" data-href="https://www.facebook.com/alpineotter/" data-tabs="timeline" data-width="450px" data-height="700px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="https://www.facebook.com/alpineotter/" class="fb-xfbml-parse-ignore">
      <a href="https://www.facebook.com/alpineotter/">Megan &amp; co</a>
    </blockquote>
  </div>
    </div>
      </template>

<script>
export default {
  name: 'BlogPage',
  mounted() {
    // Includi lo script SDK di Facebook
    const script = document.createElement('script');
    script.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v17.0';
    script.async = true;
    script.defer = true;
    script.crossOrigin = 'anonymous';
    script.nonce = 'tvAxnKHk';
    document.getElementById('fb-root').appendChild(script);
  },
};
</script>
  
  <style>

  .blog-page{
    display: flex;
    flex-direction: column;
    align-items: center;
  }


  </style>
  