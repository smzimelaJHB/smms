export default {
  modules: [
    "@nuxtjs/axios",
    [
      "nuxt-mail",
      {
        message: {
          to: "mzimelasiyabonga00@gmail.com",
        },
        smtp: {
          host: "smtp.gmail.com",
          port: 587,
          auth: {
            user: "mzimelasiyabonga00@gmail.com",
            pass: "bjwsjbwxewrlivcg",
          },
        },
      },
    ],
  ],
};
