let numOfLayers;
let buttonOK;
let numOfLayersMessage;
function setup() {
	createCanvas(window.innerWidth, window.innerHeight);

	numOfLayersMessage = createElement('h2', 'Number of layers');
	numOfLayersMessage.position(50, 5);

	numOfLayers = createInput();
	numOfLayers.position(250, 30);

	buttonOK = createButton('OK');
	buttonOK.position(50, 55);
	buttonOK.mousePressed(layers);
}

let n;
let layer = [];
let numOfNeuronsMessage;
let buttonCreateNN;
function layers() {
	n = numOfLayers.value();
	for(let i = 0; i < n; i++) {
		if(i == 0) {
			numOfNeuronsMessage = createElement('h2', 'Number of neurons of input layer');
		}
		else if(i == n - 1) {
			numOfNeuronsMessage = createElement('h2', 'Number of neurons of output layer');
		}
		else {
			numOfNeuronsMessage = createElement('h2', 'Number of neurons in hidden layer ' + i);
		}
		numOfNeuronsMessage.position(450, 5 + i * 30);

		layer[i] = createInput();
		layer[i].position(850, 30 + i * 30);
	}
	buttonCreateNN = createButton('Create');
	buttonCreateNN.position(450, 30 + n * 30);
	buttonCreateNN.mousePressed(createNN);
}

function createNN() {
	n = numOfLayers.value();
	for(let i = 0; i < n; i++) {
		for(let j = 0; j < layer[i].value(); j++) {
			fill(255, 50 + i * 50, 50 + i * 50);
			let x = 50 + i * 200;
			let y = (height/2 - (layer[i].value() * 25)) + j * 50;
			let w = 25;
			let h = 25;
			ellipse(x, y, w, h);
		}
	}

	for(let i = 0; i < n - 1; i++) {
		for(let j = 0; j < layer[i].value(); j++) {
			for(let k = 0; k < layer[i+1].value(); k++) {
				let x1 = 62.5 + i * 200;
				let y1 = (height/2 - (layer[i].value() * 25)) + j * 50;
				let x2 = 237.5 + i * 200;
				let y2 = (height/2 - (layer[i+1].value() * 25)) + k * 50;
				line(x1, y1, x2, y2);
			}
		}
	}
}

function draw() {
}