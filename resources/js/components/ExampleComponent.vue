<template>
    <div>
        <div class="card">
            <div class="card-header">Example Component</div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="btn btn-primary btn-sm shadow-none" @click="clickHandle">Click Me</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "Al Amin Islam"
        }
    },

    methods: {
        datePrint() {
            const d = new Date();
            console.log(d.toLocaleString());
        },
        clickHandle() {
            alert(this.name)
        },
    },
}
</script>
