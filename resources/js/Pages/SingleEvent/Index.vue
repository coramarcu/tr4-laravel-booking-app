<template>
    <h1>Buy tickets for {{ event.event_name }}</h1>

    <form
        @submit.prevent="form.post(`/event/${event.id}/tickets`)"
        method="post"
    >
        <label for="first-name">First Name:</label>
        <input
            id="first-name"
            v-model="form.first_name"
            type="text"
            name="first"
        />

        <label for="last-name">Last Name:</label>
        <input id="last-name" v-model="form.last_name" type="text" />

        <label for="emial">Email:</label>
        <input id="email" v-model="form.email" type="email" />

        <label for="number-of-tickets">Number of tickets:</label>
        <input
            id="number-of-tickets"
            v-model="form.requested_tickets"
            type="text"
        />

        <button type="submit">Submit</button>
    </form>
</template>

<script>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    first_name: "",
    last_name: "",
    email: "",
    requested_tickets: "",
});

// const submit = () => {
//     form.post("/create-user");
// };

export default {
    props: {
        event: Object,
    },
    data() {
        return {
            form: form,
        };
    },
};
</script>
