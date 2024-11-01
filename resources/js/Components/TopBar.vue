<template>
    <header class="top-bar">
      <div class="logo">
        <a href="/"><h4>Task/r</h4></a>
      </div>
  
      <nav class="nav-links">
        <ul>
          <li v-for="link in links" :key="link.name">
            <a :href="link.url">{{ link.name }}</a>
          </li>
        </ul>
      </nav>
    </header>
    <title  v-for="link in links" :key="link.name">{{ link.tile }}</title>
  </template>
  
  <script>
  export default {
    data() {
      return {
        logo: '/path/to/logo.png',
        links: [
          { name: 'Home', url: '/', tile: 'Task/r | Home' },
          { name: 'Profile', url: '/profile', tile: 'Task/r | Profile' },
          { name: 'About', url: '/about', tile: 'Task/r | About' }
        ],
      }
    }
  }
  </script>
  
  <style scoped>
  .top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: #333;
    color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }
  
  .logo img {
    max-height: 40px;
  }
  
  .nav-links ul {
    display: flex;
    gap: 1rem;
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  .nav-links a, .logo a {
    color: #fff;
    text-decoration: none;
  }
  
  .nav-links a:hover {
    color: #aaa;
  }
  </style>
  