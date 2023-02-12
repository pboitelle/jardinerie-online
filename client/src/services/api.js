import axios from "axios";

function createRequest() {
    return axios.create({
        baseURL: "http://localhost:80"
    });
}

export async function getUsers() {
    const request = createRequest();

    const response = await request.get("/api/users");

    return response.data;
}