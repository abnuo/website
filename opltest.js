const OPL = require('@malvineous/opl');
const size =  5000
const amplitude = 128
const sampleRate = 20
let wav = require('node-wav');

OPL.create().then(opl => {
    opl.write(0xBD, 0x20);
    const samples = opl.generate(512);
    // samples now contains 512 16-bit stereo samples as a Uint8Array
});
let buffer = wav.encode(samples, { sampleRate: sampleRate, float: true, bitDepth: 32 });

fs.writeFile("test.wav", buffer, (err) => {
  if (err) return console.log(err);

  console.log("test.wav written");
});
