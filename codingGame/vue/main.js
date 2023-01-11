// Vue.js 3.x code​​​​​​‌​​‌​​‌‌​​‌​​‌​​​‌​​‌​‌‌‌ below
import { createApp } from 'vue'

const app = createApp({
  // Modify the template if you want to change the preview
  // It will not be evaluated as part of the assessment
  template: `<InputComponent wordLimit="50" @submit="handleSubmit"/>`,
  methods: {
    handleSubmit: function(content) {
      // When the submit button is clicked, content should be emitted to this method
      // This does not need to be altered
    }
  }
})

app.component('InputComponent', {
  template: `<div>
    <textarea v-model="content" @change="countWords></textarea>

    <!-- Issue 1: This counter isn't updating -->
    <!-- Issue 2: This counter should not display negative numbers -->
    <p>Words left: {{wordsLeft}}</p>
    
    <!-- Issue 3: This button is always disabled -->
    <button disabled @click="submit">Submit</button>
  </div>`,

  data: () => ({
    content: "",
    wordsLeft: 0
  }),
  
  created() {
    this.wordsLeft = this.wordLimit - this.countWords(this.content);
  },
  
  methods: {
    submit: function() {
      // Issue 4: This should emit the content to the parent with custom event named "submit"
    },

    // This method does not need to be altered
    countWords(content) {
      if(this.content.length == 0) {
        return 0;
      }
      return this.content.split(" ")
        .filter(n => n != "")
        .length;
    }
  },
  
  props: ["wordLimit"],
})

// Do not change
export default app
