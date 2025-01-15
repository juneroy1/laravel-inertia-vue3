<template>
    <div>
        <h1>Home</h1>
        <nav>
            <ul>
                <li><Link href="/">Home</Link></li>
                <li><Link href="/contact">Contact</Link></li>
                <li><Link href="/settings">Settings</Link></li>
            </ul>
        </nav>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';


export default {
    name: "Home",
    components: {Link}
};
</script>
