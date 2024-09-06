import React from "react";
import Header from "../layouts/Header";
import Main from "../layouts/Main";
import Footer from "../layouts/Footer";

export default function () {
    return (
        <React.Fragment>
            <div className="flex flex-col min-h-screen">
                <Header/>
                <Main className="flex-grow" />
                <Footer />
            </div>
        </React.Fragment>
    )
}
