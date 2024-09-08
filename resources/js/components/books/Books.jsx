import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Header from "../layouts/Header";
import Main from "../layouts/Main";
import Footer from "../layouts/Footer";

export default function Books() {
    return (
        <BrowserRouter>
            <div className="flex flex-col min-h-screen">
                <Header />
                <main className="flex-grow">
                    <Routes>
                        <Route path="/about" element={<>About Page</>} />
                        <Route path="/contact" element={<>Contact Page</>} />
                        <Route path="/getbook" element={<>Get Book Page</>} />
                        <Route path="/*" element={<Main />} />
                    </Routes>
                </main>
                <Footer />
            </div>
        </BrowserRouter>
    );
}
