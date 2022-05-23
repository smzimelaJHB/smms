import nodemailer from "nodemailer";

const yourEmail = "mzimelasiyabonga00@gmail.com";
const yourPass = "bjwsjbwxewrlivcg";
const mailHost = "smpt.gmail.com";
const mailPort = 587;
const senderEmail = "mzimelasiyabonga00@gmail.com";

/**
 * Send mail
 * @param {string} to
 * @param {string} subject
 * @param {string[html]} htmlContent
 * @returns
 */
const sendMail = (to, subject, htmlContent) => {
  let transporter = nodemailer.createTransport({
    host: mailHost,
    port: mailPort,
    secure: false, // use SSL - TLS
    auth: {
      user: yourEmail,
      pass: yourPass,
    },
  });
  let mailOptions = {
    from: senderEmail,
    to: to,
    subject: subject,
    html: htmlContent,
  };
  return transporter.sendMail(mailOptions); // promise
};

export default sendMail;
