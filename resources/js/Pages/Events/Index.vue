<template>
    Hey Events!
    <a :href="route('second')">Go to second page.</a>

    <article v-for="event in events" :key="event.id">
        <h1>{{ event.country }}</h1>
    </article>
</template>

<script>
export default {
    props: {
        events: Array,
    },
    data() {
        return {};
    },
};
</script>
