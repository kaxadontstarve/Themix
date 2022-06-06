import React, { useState, useEffect } from 'react';
import PostFilter from '../Components/PostFilter';
import PostForm from '../Components/PostForm';
import PostList from '../Components/PostList';
import '../styles/App.css';
import MyModal from '../Components/Ui/MyModal/MyModal';
import MyButton from '../Components/Ui/button/MyButton';
import { usePosts } from '../hooks/usePosts';
import PostService from '../API/PostSevice';
import Loader from '../Components/Ui/Loader/Loader';
import { useFetching } from '../hooks/useFetching';
import { getPageCount, getPagesArray } from '../utils/pages';
import Pagination from '../Components/Ui/pagination/Pagination';



function Posts() {
    const [posts, setPosts] = useState([])
    const [filter, setFilter] = useState({ sort: '', query: '' })
    const [modal, setModal] = useState(false);
    const [totalPages, setTotalPages] = useState(0);
    const [limit, setLimit] = useState(10);
    const [page, setPage] = useState(1);
    const sortedAndSearchedPosts = usePosts(posts, filter.sort, filter.query);



    const [fetchPosts, isPostsLoading, postError] = useFetching(async (limit, page) => {
        const response = await PostService.getAll(limit, page);
        setPosts(...posts,response.data);
        const totalCount = response.headers['x-total-count'];
        setTotalPages(getPageCount(totalCount, limit));
    })



    useEffect(() => {
        fetchPosts(limit, page);
    }, [])

    const createPost = (newPost) => {
        setPosts([...posts, newPost])
        setModal(false);
    }

    const changePage = (page) => {
        setPage(page);
        fetchPosts(limit, page);
    }

    const removePost = (post) => {
        setPosts(posts.filter(p => p.id !== post.id))
    }

    return (
        <div className="App">
            <MyButton onClick={fetchPosts}>GET POSTS</MyButton>
            <MyButton onClick={() => setModal(true)}>
                Create users
            </MyButton>
            <MyModal visible={modal} setVisible={setModal}>
                <PostForm create={createPost}></PostForm>
            </MyModal>

            <hr />
            <PostFilter
                filter={filter}
                setFilter={setFilter}>
            </PostFilter>
            {postError &&
                <h1>Error ${postError}</h1>
            }
            <PostList remove={removePost} posts={sortedAndSearchedPosts} title="-Post List-"></PostList>

            {isPostsLoading &&
                 <div style={{ display: 'flex', justifyContent: 'center', marginTop: 50 }}><Loader></Loader></div>
            }

            
            <Pagination
                page={page}
                changePage={changePage}
                totalPages={totalPages}
            ></Pagination>
        </div>
    );
}

export default Posts;
