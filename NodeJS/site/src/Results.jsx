import React, { useEffect, useState } from "react";
import axios from "axios";

function Results() {
    const [NewsList, setNewsList] = useState([]);
    const [NewsListFiltered, setNewsListFiltered] = useState([]);


    async function getData () {
        const res = await axios.get("https://api.themoviedb.org/3/tv/popular?api_key=15e383204c1b8a09dbfaaa4c01ed7e17&language=fr-Fr");
        setNewsList(res.data.results);
        setNewsListFiltered(res.data.results);
    }

    useEffect(() => {
        getData();
    },[]);

    function handlechange(e) {
        if (!e.target.value) {
            setNewsListFiltered(NewsList);
            return;
        }

        setNewsListFiltered(
            NewsList.filter((tv) => tv.name.includes(e.target.value))
        );
    }


    return (
        <div>
            <input className="SearchBar" onChange={handlechange} type='text' placeholder=" Exemple: Chainsaw Man"/>
            <div className="NewTitle">
                <h2>Nouveau</h2>
            </div>
            <ul className="List">
            {NewsListFiltered.map((tv) =>{
                return <li key={tv.name}><a>{tv.name}</a><img className="PosterSize" src={'https://image.tmdb.org/t/p/original'+tv.poster_path}></img></li>
            })}
            </ul>
            

        </div>
    );
}

export default Results;
