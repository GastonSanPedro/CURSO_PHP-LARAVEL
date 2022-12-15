import { getToday, sayHello } from "./utils.js";

const firstSpeak = (name) => {
  let totalFirstPhrase;
  const hello = sayHello(name);
  hello !== null ? (totalFirstPhrase = hello) : (totalFirstPhrase = "Without name to say hello ");
  const date = getToday();
  date ? (totalFirstPhrase += date) : "No date";
  return totalFirstPhrase;
};

console.log(firstSpeak("Gaston"));
