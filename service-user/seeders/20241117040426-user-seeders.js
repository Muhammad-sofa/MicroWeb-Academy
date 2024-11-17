'use strict';
const bcrypt = require('bcrypt');

module.exports = {
  async up (queryInterface, Sequelize) {

    await queryInterface.bulkInsert('users', [
      {
        name: "sofa",
        profession: "Enterpreneur",
        role: "admin",
        email: "admin@example.com",
        password: await bcrypt.hash('password', 10),
        created_at: new Date(),
        updated_at: new Date()
      },
      {
        name: "affan",
        profession: "Enterpreneur",
        role: "student",
        email: "student@example.com",
        password: await bcrypt.hash('password1', 10),
        created_at: new Date(),
        updated_at: new Date()
      }
    ])
  },

  async down (queryInterface, Sequelize) {
      await queryInterface.bulkDelete('users', null, {});
  }
};
