import React, {useState} from "react";
import InputTexts from "./InputTexts";

export default function TailWindExample() {
    const [focus, setFocus] = useState(false);
    return (
        <div className="w-full max-w-sm border border-gray-700 bg-gray-800 rounded-lg shadow">
            <div className={`p-4 text-black ${focus ? 'bg-gray-700 text-white' : 'bg-white'}`}>
                <div className="font-bold text-center peer-focus:bg-blue-500">
                    Arash Salamander
                </div>
            </div>
            <div className="text-center p-10">
                <input
                    type="email"
                    placeholder="enter your email"
                    className="outline-none text-sm md:text-base rounded-lg border border-gray-400 focus:ring-2 focus:ring-blue-800 focus:border-blue-500 p-2 w-full"
                    onFocus={() => setFocus(true)}
                    onBlur={() => setFocus(false)}
                />
            </div>
        </div>
    )
}
