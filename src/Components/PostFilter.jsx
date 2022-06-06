import React from 'react'
import MyInput from './Ui/input/MyInput';
import MySelect from './Ui/MySelect/MySelect';

const PostFilter = ({ filter, setFilter }) => {

    return (
        <div>
            <MyInput
                value={filter.query}
                onChange={e => setFilter({...filter, query : e.target.value})}
                placeholder="Search"
            ></MyInput>
            <MySelect
                value={filter.sort}
                onChange={selectedSort => setFilter({...filter, sort : selectedSort})}
                defaultValue="Sorting"
                options={[
                    { value: 'title', name: 'to the name' },
                    { value: 'body', name: 'to the description' },
                ]}
            >
            </MySelect>
        </div>
    )
}


export default PostFilter;