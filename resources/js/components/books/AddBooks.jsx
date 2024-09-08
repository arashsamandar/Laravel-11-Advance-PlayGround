import React, {useState} from "react";
import InputFields from "./InputFields";

export default function AddBooks() {
    const [focus, setFocus] = useState(false);
    return (
        <div className="w-full max-w-sm border border-gray-700 bg-gray-800 rounded-lg shadow">
            <div className={`p-4 rounded-t-lg text-black ${focus ? 'bg-gray-700 text-white transition duration-500' : 'bg-gradient-to-b from-gray-800 to-black text-white border-gray-400'}`}>
                <div className="font-bold text-center">
                    Add New Book
                </div>
            </div>
            <div className="text-center p-10">
                <InputFields setFocus={setFocus}/>
            </div>
        </div>
    )
}
