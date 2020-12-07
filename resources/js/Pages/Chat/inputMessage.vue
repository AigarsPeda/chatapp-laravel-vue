<template>
  <div class="realtive h-10 m1 min-height">
    <div class="border grid grid-cols-6">
      <input
        type="text"
        v-model="message"
        @keyup.enter="sendMessage()"
        placeholder="Say somthing..."
        class="col-span-5 outline-none p-1"
      />
      <button
        @click="sendMessage()"
        class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 rounded text-white"
      >
        Send Message
      </button>
    </div>
  </div>
</template>

<script>
import Input from "../../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Jetstream/Input.vue";
import Button from "../../Jetstream/Button.vue";
export default {
  components: { Input, Button },
  props: ["room"],
  data: function() {
    return {
      message: ""
    };
  },
  methods: {
    sendMessage() {
      if (this.message === "") {
        return;
      }

      axios
        .post(`/chat/room/${this.room.id}/message`, {
          message: this.message
        })
        .then(response => {
          if (response.status === 201) {
            this.message = "";
            this.$emit("messagesnet");
          }
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>

<style>
.border {
  border-top: 1px solid #e6e6e6;
}

.min-height {
  min-height: 80px;
}
</style>
