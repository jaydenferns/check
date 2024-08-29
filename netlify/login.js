exports.handler = async (event, context) => {
    const { username, password } = JSON.parse(event.body);

    // Hardcoded credentials for demonstration purposes
    const validUsername = "admin";
    const validPassword = "password123";

    if (username === validUsername && password === validPassword) {
        return {
            statusCode: 200,
            body: JSON.stringify({ message: "Login successful" }),
        };
    } else {
        return {
            statusCode: 401,
            body: JSON.stringify({ message: "Invalid username or password" }),
        };
    }
};
