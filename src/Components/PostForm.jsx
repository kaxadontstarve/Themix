import React,{useState} from 'react'
import MyButton from './Ui/button/MyButton';
import MyInput from './Ui/input/MyInput';

const PostForm = ({create}) => {

    const [post, setPost] = useState({ title: '', body: '' });

    const addNewPost = (e) => {

        e.preventDefault();

        const newPost = {
            ...post, id : Date.now()
        };
        create(newPost);
        setPost({ title: '', body: '' });
    }

    
    return (
            <form>
                <MyInput
                    onChange={e => setPost({ ...post, title: e.target.value })}
                    type="text"
                    placeholder='Название поста'
                    value={post.title}
                />
                <MyInput
                    type="text"
                    placeholder='Описание поста'
                    value={post.body}
                    onChange={e => setPost({ ...post, body: e.target.value })}
                />
                <MyButton onClick={addNewPost}>Create new post</MyButton>
            </form>
    )
}
export default PostForm;