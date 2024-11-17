module.exports = (sequelize, DataTypes) => {
     const User = sequelize.define('User', {
          id: {
               type: DataTypes.INTEGER,
               autoIncement: true,
               primaryKey: true,
               allowNull: false
          },
          name: {
               type: DataTypes.STRING,
               allowNull: false
          },
          email: {
               type: DataTypes.STRING,
               allowNull: false,
               unique: true
          },
          password: {
               type: DataTypes.STRING,
               allowNull: false
          },
          role: {
               type: DataTypes.ENUM,
               values: ['admin', 'student'],
               allowNull: false,
               allowNull: false,
               defaultValue: 'student'
          },
          avatar: {
               type: DataTypes.STRING,
               allowNull: true
          },
          profession: {
               type: DataTypes.STRING,
               allowNull: true
          },
          created_at: {
               field: 'created_at',
               type: DataTypes.DATE,
               allowNull: false
          },
          updated_at: {
               field: 'updated_at',
               type: DataTypes.DATE,
               allowNull: false
          }
     }, {
          tableName: 'users',
          timeStamps: true
     });

     return User;
}