const jwt = require('jsonwebtoken');

const JWT_SECRET = 'sofa!23';

// create basic token with process syncrounus (berurutan)
// const token = jwt.sign({data: {kelas: 'web developer'}}, JWT_SECRET);
// console.log(token);

// asyncrounus - create token
// jwt.sign({data: {kelas: 'web developer'}}, JWT_SECRET, (err, token) => {
//      console.log(token);
// })
// console.log('hello');

//set expired token
//syncrounus
const token = jwt.sign({data: {kelas: 'web developer'}}, JWT_SECRET, {expiresIn: '3600'}); //1 jam (3600 detik)
//asyncrounus
jwt.sign({data: {kelas: 'web developer'}}, JWT_SECRET, {expiresIn: '3600'}, (err, token) => { //1 jam (3600 detik)
})

const token1 = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjp7ImtlbGFzIjoid2ViIGRldmVsb3BlciJ9LCJpYXQiOjE3MzE5OTgzNjV9.Oy4Z2mI4c8Ksc3YTIk270Wr-JbBAPl1krgVxd1D53ZA';

//verify token cara 1
jwt.verify(token1, JWT_SECRET, (err, decoded) =>{
     if(err) {
          console.log(err);
          return;
     };
     console.log(decoded);
});

//veryfy token cara 2
try {
     const decoded = jwt.verify(token1, JWT_SECRET);
     console.log(decoded);
} catch (error) {
     console.log(error.message);
}