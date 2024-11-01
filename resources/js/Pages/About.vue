<script>
import TopBar from '../Components/TopBar.vue'

export default {
    components: { TopBar }
}
</script>
<style>
*{
    margin: 0;
}
</style>

<template>
    <div>
        <TopBar :logo="logo" :links="navLinks" />
        <main>
            
        </main>
    </div>
</template>