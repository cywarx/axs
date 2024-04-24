



// Pink

var TB, IB = ge(() => {
		TB = `const float inGamma = 1.0; // 2.0
	const float inWhite = 20.0; // 255.0;
	const float inBlack = 210.0;
	
	const float outBlack = 90.0;
	const float outWhite = 60.0;
	
	vec3 applyLevels(vec3 inPixel) {
		float r = (pow(((inPixel.r * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
		float g = (pow(((inPixel.g * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
		float b = (pow(((inPixel.b * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
	
		// Replace with the specified colors
		vec3 purple = vec3(229.0/255.0, 0.0, 229.0/255.0);
		vec3 blue = vec3(131.0/255.0, 39.0/255.0, 196.0/255.0);
		vec3 darkBlue = vec3(51.0/255.0, 51.0/255.0, 153.0/255.0);
	
		return mix(purple, mix(blue, darkBlue, g), r);
	} `;
	});


	// Purple

    var TB, IB = ge(() => {
        TB = `const float inGamma = 1.0; // 3.0
    const float inWhite = 20.0; // 255.0;
    const float inBlack = 100.0;
    
    const float outBlack = 90.0;
    const float outWhite = 60.0;
    
    vec3 applyLevels(vec3 inPixel) {
        float r = (pow(((inPixel.r * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
        float g = (pow(((inPixel.g * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
        float b = (pow(((inPixel.b * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
    
        // Replace only the purple color with the specified color
        vec3 purple = vec3(131.0/255.0, 39.0/255.0, 196.0/255.0);  // Updated to #8327C4
    
        return mix(purple, vec3(g), r);  // Using g for green channel to maintain some variation
    } `;
    });
    

    // Blue

    var TB, IB = ge(() => {
        TB = `const float inGamma = 1.0; // 3.0
    const float inWhite = 20.0; // 255.0;
    const float inBlack = 100.0;
    
    const float outBlack = 90.0;
    const float outWhite = 60.0;
    
    vec3 applyLevels(vec3 inPixel) {
        float r = (pow(((inPixel.r * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
        float g = (pow(((inPixel.g * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
        float b = (pow(((inPixel.b * 255.0) - inBlack) / (inWhite - inBlack), 1.0/inGamma) * (outWhite - outBlack) + outBlack) / 255.0; 
    
        // Replace only the blue color with the specified color
        vec3 blue = vec3(131.0/255.0, 39.0/255.0, 196.0/255.0);  // Updated to #8327C4
    
        return mix(vec3(r), mix(blue, vec3(g), b), 0.5);  // Using r and b to maintain some variation
    } `;
    });
    