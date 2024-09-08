import React from "react";
import Header from "../layouts/Header";
import Main from "../layouts/Main";
import Footer from "../layouts/Footer";
import {BrowserRouter} from "react-router-dom";

export default function () {
    return (
        <BrowserRouter>
            <div className="flex flex-col min-h-screen">
                <Header/>
                <Main />
                <Footer />
            </div>
        </BrowserRouter>
    )
}
