import React from "react";


export default function CheckCheckbox(){

    handleChange = () => {
        this.props.onChange({ checked: !this.props.checked });
    }

    render() ;
    {
        return (
            <span>
                <input class="ios_toggle" type="checkbox"
                    value={this.props.value}
                    disabled={this.props.disabled}
                    checked={this.props.checked}
                    onChange={this.handleChange}
                    
                />
            </span>
        );
    }
}