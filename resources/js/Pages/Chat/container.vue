<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Chat
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <MessageConatainer :messages="messages" />
          <InputMessage :room="currentRoom" v-on:messagesnet="getMessages()" />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import MessageConatainer from "./messageConatainer.vue";
import InputMessage from "./inputMessage.vue";

export default {
  components: {
    AppLayout,
    MessageConatainer,
    InputMessage
  },
  data: function() {
    return {
      chatRomms: [],
      currentRoom: [],
      messages: []
    };
  },
  methods: {
    getRooms() {
      axios
        .get("/chat/rooms")
        .then(response => {
          this.chatRomms = response.data;
          this.setRoom(response.data[0]);
        })
        .catch(error => {
          console.log(error);
        });
    },
    setRoom(room) {
      this.currentRoom = room;
      this.getMessages();
    },
    getMessages() {
      axios
        .get(`/chat/room/${this.currentRoom.id}/messages`)
        .then(response => {
          this.messages = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  },
  created() {
    this.getRooms();
  }
};
</script>
