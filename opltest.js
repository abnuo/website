const OPL = require('@malvineous/opl');
const fs = require('fs');
const wavefile = require('wavefile');
const crypto = require('crypto'); 
const size =  5000
const amplitude = 128
const sampleRate = 20
crypto.randomBytes(127, (err, buf) => { 

  if (err) { 

    // Prints error 

    console.log(err); 

    return; 

  } 
OPL.create().then(opl => {
    opl.write(buf);
    const samples = opl.generate(512);
    // samples now contains 512 16-bit stereo samples as a Uint8Array
    let wav = new wavefile.WaveFile();
    // Create a mono wave file, 44.1 kHz, 32-bit and 4 samples
    wav.fromScratch(1, 44100, '16', samples);
    fs.writeFileSync('opl.wav', wav.toBuffer());
});
