import React from "react";
import {Link} from "react-router-dom";

export default function Header(){
    return (
        <header className="relative bg-blue-600 drop-shadow-lg p-4 text-center min-h-[5vh]">
            <nav className="flex items-center justify-center">
                <a href="/" className="absolute left-4 text-2xl font-bold text-white float-left">Laravel Eleven</a>
                <ul className="flex space-x-4 items-center justify-center">
                    <li>
                        <Link to="/getbook" className="text-blue-200 px-4 py-3 hover:text-xl">
                            Update Book
                        </Link>
                    </li>
                    <li>
                        <Link to="/about" className="text-blue-200 px-4 py-3 hover:text-xl">
                            Get Books
                        </Link>
                    </li>
                    <li>
                        <Link to="/contact" className="text-blue-200 px-4 py-3 hover:text-xl">
                            Add Book
                        </Link>
                    </li>
                </ul>
            </nav>
        </header>
    )
}
