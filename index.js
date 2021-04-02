const express = require('express')
const app = express()
const http = require('http').Server(app)

// Serve the public folder statically
app.use(express.static(__dirname))
http.listen(3000, () => console.log('Listening on port 3000...'))
