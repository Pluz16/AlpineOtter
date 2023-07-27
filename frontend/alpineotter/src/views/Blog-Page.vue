<template>
  <div class="blog-page">
    <h1>Blog</h1>
    <div class="fb-page" v-if="isLoaded" :data-href="facebookPageUrl" :data-tabs="facebookPageTabs" :data-width="facebookPageWidth" :data-height="facebookPageHeight" :data-small-header="facebookPageSmallHeader" :data-adapt-container-width="facebookPageAdaptContainerWidth" :data-hide-cover="facebookPageHideCover" :data-show-facepile="facebookPageShowFacepile">
      <blockquote cite="https://www.facebook.com/alpineotter/" class="fb-xfbml-parse-ignore">
        <a href="https://www.facebook.com/alpineotter/">Megan &amp; co</a>
      </blockquote>
    </div>
  </div>
</template>

<script>
export default {
  name: 'BlogPage',
  data() {
    return {
      facebookPageUrl: 'https://www.facebook.com/alpineotter/',
      facebookPageTabs: 'timeline',
      facebookPageWidth: 450,
      facebookPageHeight: 700,
      facebookPageSmallHeader: false,
      facebookPageAdaptContainerWidth: true,
      facebookPageHideCover: false,
      facebookPageShowFacepile: true,
      isLoaded: false,
    };
  },
  mounted() {
    // Includi lo script SDK di Facebook
    const script = document.createElement('script');
    script.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v17.0';
    script.async = true;
    script.defer = true;
    script.crossOrigin = 'anonymous';
    document.getElementById('fb-root').appendChild(script);

    // Ascolta l'evento `fbAsyncInit`
    window.fbAsyncInit = () => {
      this.isLoaded = true;
    };
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
