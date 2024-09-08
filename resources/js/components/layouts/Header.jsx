import React from "react";
import CustomeLink from "./CustomeLink";

export default function Header(){
    return (
        <header className="relative bg-gray-700 drop-shadow-lg p-4 text-center min-h-[5vh]">
            <nav className="flex items-center justify-center">
                <a href="/getbooks" className="absolute left-4 text-2xl font-bold text-white float-left">Laravel Eleven</a>
                <ul className="flex space-x-4 items-center justify-center">
                    <CustomeLink to="/getbooks" name="Add Books" />
                    <CustomeLink to="/updatebooks" name="Update Books" />
                    <CustomeLink to="/showbooks" name="Show Books" />
                </ul>
            </nav>
        </header>
    )
}
