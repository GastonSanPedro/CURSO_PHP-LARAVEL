export const sayHello = (name) => {
  if (!name) return null;
  return `Hello ${name} `;
};

export const getToday = () => {
  return `today is ${new Date()}`;
};
