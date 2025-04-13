import "./bootstrap";

window.greeting = function greeting() {
  return {
    message: "",
    init() {
      const hour = new Date().getHours();
      this.message = hour < 12 ? "Good Morning!" : "Good Afternoon!";
    },
  };
};
