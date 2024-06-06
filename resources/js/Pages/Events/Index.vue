<template>
    Hey Events!
    <a :href="route('second')">Go to second page.</a>

    <article v-for="event in events" :key="event.id">
        <h1>{{ event.event_name }}</h1>
        <div class="meta-info">
            <div class="times">
                <p>Starts at: {{ event.start_date_time }}</p>
                <p>Ends at: {{ event.end_date_time }}</p>
            </div>
            <div class="location">
                <p>Country: {{ event.country }}</p>
                <p>City: {{ event.city }}</p>
            </div>
            <p>
                You can buy a maximum of {{ event.tickets_per_user }} per user
                for this event.
            </p>
        </div>
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
