<template>
  <div class="app-owns">
    <h2 class="title">I NOSTRI CANI</h2>
    <div class="slider-container">
      <div class="row">
        <div v-for="dog in dogs" :key="dog.id" class="col-md-3 col-sm-6">
          <div class="dog-card">
            <div class="dog-image">
              <div class="circle-container">
                <img :src="require(`@/assets/${dog.photo}`)" alt="Foto del cane" class="rounded-circle" />
              </div>
              <div class="overlay">
                <span class="overlay-text">Scopri di più</span>
              </div>
            </div>
            <h3 class="dog-name">{{ dog.name }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dogs: [
        { id: 1, name: 'Mira', photo: 'Mira_head.jpg' },
        { id: 2, name: 'Magda', photo: 'Magda_head.jpg' },
        { id: 3, name: 'Cuba', photo: 'Cuba_head.jpg' },
        { id: 4, name: 'Webby', photo: 'Webby_head.jpg' },
      ],
    };
  },
};
</script>

<style scoped>
.app-owns {
  text-align: center;
}

.title {
  font-size: 24px;
  margin-bottom: 20px;
  margin-top: 16px;
}

.slider-container {
  background-color: #F0A6A6;
  padding: 20px;
}

.dog-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  /* margin: 10px; */
}

.dog-image {
  position: relative;
}

.circle-container {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

.circle-container img {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.dog-card:hover .overlay {
  opacity: 1;
}

.overlay-text {
  color: white;
  font-weight: bold;
  font-size: 16px;
}

.dog-name {
  /* margin-top: 10px; */
  font-size: 18px;
}

@media (max-width: 767px) {
  .row {
    flex-wrap: wrap;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .dog-card {
    flex: 0 0 100%;
  }
}

</style>
