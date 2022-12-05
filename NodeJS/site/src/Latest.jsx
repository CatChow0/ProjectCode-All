import React, { useEffect, useState } from "react";
import axios from "axios";

function Latest() {
    const [LatestList, setLatestList] = useState([]);


    async function getData () {
        const pop = await axios.get("https://api.themoviedb.org/3/movie/popular?api_key=15e383204c1b8a09dbfaaa4c01ed7e17&language=fr-Fr");
        setLatestList(pop.data.results);

    }

    useEffect(() => {
        getData();
    },[]);

    return (
        <div>
            <div className="MoviePopTitle">
                <h2>
                    Film Populaire
                </h2>
            </div>
            <ul className="List">
                {LatestList.map((movie) =>{
                    return <li key={movie.title} ><img className="PosterSize" src={'https://image.tmdb.org/t/p/original'+movie.poster_path} alt='Image Du Film'></img><a>{movie.title}</a></li>
                })}
            </ul>


        </div>
    )


}

export default Latest;