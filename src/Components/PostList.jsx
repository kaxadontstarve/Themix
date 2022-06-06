import React from 'react'
import { TransitionGroup, CSSTransition } from 'react-transition-group'
import PostItem from './PostItem'

const PostList = function ({posts, title,remove,post,}) {

    if(!posts.length){
        return(
            <h1 style = {{textAlign: 'center'}}>
                -Posts is not found-
            </h1>
        )
    }
    return (
        <div>
            <h1 style={{textAlign: 'center' }}>
                     {title}
            </h1>
            <TransitionGroup>
                {posts.map((post, index) => 
                    <CSSTransition
                        key={post.id}
                        timeout={500}
                        classNames="post"
                    >
                <PostItem remove = {remove} number = {index+1} post = {post}></PostItem>
                        </CSSTransition>
            )}
            </TransitionGroup>

        </div>
    )
}
export default PostList;