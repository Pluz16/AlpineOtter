<template>
  <header class="app-header">
    <div class="logo">
      <img src="@/assets/logodef.jpg" alt="Logo" />
    </div>
    <div class="brand">
      <h1>Megan &amp; Co.</h1>
    </div>
    <nav class="navbar">
      <ul>
        <li><a href="#">Allevamento</a></li>
        <li><a href="#">Pensione</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Chi siamo</a></li>
        <li><a href="#">Contattaci</a></li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'AppHeader',
};
</script>

<style scoped>
.app-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.logo {
  font-weight: bold;
  font-size: 24px;
}

.logo img {
  max-width: 100px;
}

.brand {
  font-size: 20px;
}

.navbar ul {
  list-style: none;
  display: flex;
}

.navbar li {
  margin-right: 10px;
}

.navbar a {
  text-decoration: none;
  color: #000;
  font-weight: bold;
}
</style>
