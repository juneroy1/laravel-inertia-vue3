<template>
    <div>
        <h1>Home</h1>
        <Nav/>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Nav from '../shared/Nav.vue';


export default {
    name: "Home",
    components: {Link, Nav}
};
</script>
